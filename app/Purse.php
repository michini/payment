<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purse extends Model
{
    protected $table = 'purses';

    protected $fillable = [
        'name'
    ];
}
