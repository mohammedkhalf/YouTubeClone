<?php

namespace laraTube;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
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
