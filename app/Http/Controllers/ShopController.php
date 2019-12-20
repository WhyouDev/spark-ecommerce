<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function detailShop () {
        return view('pages.detailshop');
    }
}
