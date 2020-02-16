<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subscription extends BaseModel
{
        protected $fillable = [
            'channel_id', 'user_id'
        ];

//        public $incrementing = false;
//
//        protected static function boot()
//        {
//            parent::boot();
//
//            static::creating(function ($model) {
//
//                $model->id = Str::uuid();
//
//            });
//        }
}
