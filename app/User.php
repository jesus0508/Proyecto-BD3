<?php

namespace DBProject;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
use MongoModel;

class User extends MongoModel implements Authenticatable
{
    use AuthenticableTrait;
    use Notifiable;

    protected $collection = 'usuario';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','grupos',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Traer la coleccion embebida
     */
    public function profile()
    {
        return $this->embedsOne('Profile');
    }

}
