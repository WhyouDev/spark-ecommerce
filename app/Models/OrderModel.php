<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table = "orders";

    public function OrderDetail(){
        return $this->hasOne('App\Models\OrderDetailModel','orders_id','orders_id');
    }

    public function User(){
        return $this->hasOne('App\User','users_id','id');
    }
}
