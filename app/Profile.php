<?php

namespace DBProject;

use Illuminate\Database\Eloquent\Model;
use MongoModel;

class Profile extends MongoModel
{
    protected $collection = 'usuario';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codigo', 'nombres', 'apellido_paterno', 'apellido_materno', 'direccion', 'telefono','fecha_nacimiento'
    ];
}
