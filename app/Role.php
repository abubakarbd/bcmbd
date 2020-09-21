<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'id','name'
    ];

    protected $casts = [
    'email_verified_at' => 'datetime',
    ];

    public function user(){
        return $this->hasMany('App\User');
    }
}


