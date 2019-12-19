<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductModel;
use App\Models\CategoriesModel;
use DataTables;

class ProductController extends Controller
{

    public function productjson(){
        $productlist = ProductModel::all();
        return Datatables::of($productlist)
         ->addColumn('action', function ($productlist) {
                $btn = '
                <a href="admin/product/edit/'.$productlist->products_id.'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct"><i class="fa fa-edit"></i>&nbspEdit</a>';


                $btn .= ' <button data-id="'.$productlist->products_id.'" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i>&nbspDelete</button>';
                      
                
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

    public function add()
    {
        $categorieslist = CategoriesModel::all();
        return view('admin.productadd',['categorieslist' => $categorieslist]);
    }

    public function store(Request $request)
    {
        // validasi form
        $this->validate($request, [
            'pname' => 'required',
            'pcat' => 'required',
            'pprice' => 'required',
            'pfile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pqty' => 'required',
            'putype' => 'required'
        ]);
    
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('pfile');
        // menyimpan nama file kedalam variable namafoto
        $namaphoto = $file->getClientOriginalName();
    
        // file dir
        $tujuan_upload = 'img_products/';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        // insert data ke table products
        ProductModel::create([
            'categories_id' => $request->pcat,
            'products_name' => $request->pname,
            'price' => $request->pprice,
            'products_photo' => $namaphoto,
            'products_stock' => $request->pqty,
            'products_unittype' => $request->putype
        ]);

        // jika berhasil direct ke halaman product
        return redirect('/admin/product');
    }

    public function delete($id)
    {
        $products = ProductModel::where('products_id',$id);
        $products->delete();

        $data = [
            "status" => 200,
            "message" => "Successfully Delete Award"
        ];

        return json_encode($data);

        return redirect('/admin/product');
    }

}
