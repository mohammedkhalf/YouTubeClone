<?php

namespace laraTube;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Channel extends Model
{
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
