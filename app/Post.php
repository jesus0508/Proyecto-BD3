<?php

namespace DBProject;

use Illuminate\Database\Eloquent\Model;
use MongoModel;

class Post extends MongoModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'content', 'date'
    ];
}
