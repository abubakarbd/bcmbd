<?php

namespace App\agent;

use Illuminate\Database\Eloquent\Model;

class ClientBill extends Model
{
    protected $fillable = [
        'user_id','name','mobile','agent','bm_mobile','bill_date','bill',
    ];

}
