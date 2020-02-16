<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Channel extends BaseModel implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
        'name', 'user_id', 'description' , 'image',
    ];

//    public $incrementing = false;
//
//    protected static function boot()
//    {
//        parent::boot();
//
//        static::creating(function ($model) {
//
//            $model->id = Str::uuid();
//
//        });
//    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function editTable()
    {
        if(!auth()->check())  return false;

        return $this->user_id === auth()->user()->id;
    }

    public function subscriptions(){
        return $this->hasMany(Subscription::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
