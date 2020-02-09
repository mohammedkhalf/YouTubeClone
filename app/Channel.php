<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Channel extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
        'name', 'user_id', 'description' , 'image',
    ];

    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {

            $model->id = Str::uuid();

        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
