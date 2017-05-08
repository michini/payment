<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'dni',
        'address',
        'type_home',
        'number_phone_home',
        'number_phone_familiar',
        'number_phone_neighbour',
        'number_phone_personal',
        'new_address',
        'new_type_home',
        'new_number_phone_home',
        'new_number_phone_familiar',
        'new_number_phone_neighbour',
        'new_number_phone_personal',
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
