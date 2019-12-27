<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetailModel extends Model
{
    protected $table = "order_details";

    public function Order(){
        return $this->hasOne('App\Models\OrderModel','orders_id','orders_id');
    }

    public function Product(){
        return $this->hasOne('App\Models\ProductModel','products_id','products_id');
    }
}
