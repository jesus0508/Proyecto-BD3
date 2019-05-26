<?php

namespace DBProject;

use Illuminate\Database\Eloquent\Model;
use MongoModel;

class Profile extends MongoModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'names', 'last_name', 'address', 'phone', 'birthday'
    ];
}
