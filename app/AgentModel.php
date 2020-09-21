<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentModel extends Model
{
    protected $fillable = [
        'user_id','name','mobile', 'pakage','bill',
    ];
}
