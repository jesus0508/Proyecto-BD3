<?php

namespace DBProject;

use Illuminate\Database\Eloquent\Model;
use MongoModel;

class Post extends MongoModel
{
    protected $collection = 'publicacion';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'autor', 'contenido', 'fecha'
    ];

    /**
     * Traer la coleccion embebida
     */
    public function profile()
    {
        return $this->embedsMany('Profile');
    }
}
