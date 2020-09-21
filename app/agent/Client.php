<?php

namespace App\agent;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'username','type','package','mobile','password','ip','mbill','address', 'agent',
    ];
}
