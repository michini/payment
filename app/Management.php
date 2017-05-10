<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    protected $table = 'managements';

    protected $fillable = [
        'approved_status',
        'comment',
        'date',
        'url_photo',
        'reason_id',
        'user_id'
    ];
}
