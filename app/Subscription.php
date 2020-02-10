<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subscription extends Model
{
        public $incrementing = false;

        protected static function boot()
        {
            parent::boot();

            static::creating(function ($model) {

                $model->id = Str::uuid();

            });
        }
}
