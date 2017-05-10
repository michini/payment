<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;
class Role extends EntrustRole
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
        'display_name',
        'description'
    ];

    public function user(){
        return $this->belongsTo(User::class,'id','id');
    }
}
