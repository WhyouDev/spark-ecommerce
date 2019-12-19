<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = "products";
    protected $fillable = ['products_id','categories_id','products_name','price','products_photo','products_stock','products_unittype'];
}
