<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $table = 'agencies';

    protected $fillable = [
        'description',
        'address',
        'phone_number'
    ];
}
