<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesModel;

class ShopController extends Controller
{
    public function viewShop () {
        $categorieslist = CategoriesModel::all();
        return view('pages.shop', ['categorieslist' => $categorieslist]);
    }
}
