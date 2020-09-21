<?php

namespace App\agent;

use Illuminate\Database\Eloquent\Model;

class BillList extends Model
{
    protected $fillable = [
        'user_id','name','mobile','agent',
    ];
}
