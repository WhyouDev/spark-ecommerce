<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductModel;
use DataTables;

class ProductController extends Controller
{

    public function productjson(){
        $productlist = ProductModel::all();
        return Datatables::of($productlist)
         ->addColumn('action', function ($productlist) {
                $btn = '<center><a href="/products/edit/{{ $productlist->products_id }}" data-toggle="tooltip"  data-id="'.$productlist->products_id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct"><i class="fa fa-edit"></i>&nbspEdit</a>';
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$productlist->products_id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i>&nbspDelete</a></center>';
                      return $btn;
            }
        )
        ->addIndexColumn()
        ->make(true);
    }

    public function index()
    {
        // mengambil data produk
        $productlist = ProductModel::all();
        
    	return view('admin.productlist',['productlist' => $productlist]);
    }
}
