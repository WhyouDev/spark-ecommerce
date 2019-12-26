<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table = "orders";

    public function User(){
        return $this->hasOne('App\User','id','users_id');
    }
}
