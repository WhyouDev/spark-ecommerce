<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesModel;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Session;

class CategoryController extends Controller
{
    public function categoryjson(){
        $categorylist = CategoriesModel::all();
        return Datatables::of($categorylist)
         ->addColumn('action', function ($categorylist) {
                $btn = '
                <a href="category/edit/'.$categorylist->categories_id.'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm editCategory"><i class="fa fa-edit"></i>&nbspEdit</a>';


                $btn .= ' <button data-id="'.$categorylist->categories_id.'" class="btn btn-danger btn-sm deleteCategory"><i class="fa fa-trash"></i>&nbspDelete</button>';
                      
                
                return $btn;
            }
        )
        ->addIndexColumn()
        ->make(true);
    }

    public function index()
    {
        // mengambil data kategori
        $categorieslist = CategoriesModel::all();
    	return view('admin.categorylist',['categorieslist' => $categorieslist]);
    }

     // method untuk menampilkan add data kategori
     public function add()
     {
         $categorieslist = CategoriesModel::all();
         return view('admin.categoryadd',['categorieslist' => $categorieslist]);
     }

     // method untuk menampilkan edit data produk
    public function edit($id)
    {
        // mengambil data kategori berdasarkan id yang dipilih
        $categoryEdit = CategoriesModel::where('categories_id',$id)->get();
        // passing data produk yang didapat ke view productsedit.blade.php
        return view('admin.categoryedit',['categoryEdit' => $categoryEdit]);
    }

    // method untuk proses edit data produk
    public function storeedit(Request $request, $id)
    {
        // validasi form
        $validator = Validator::make($request->all(), [
            'cname' => 'required'
        ]);
        
        if(!$validator->fails()) {
                // proses update
                $categories = CategoriesModel::where('categories_id',$id)
                ->update([
                   'categories_name' => $request->cname
                 ]);

            // jika berhasil direct ke halaman product
            return redirect('/admin/category');
            }
    
            return redirect('/admin/category/edit/{{ $categories_id }}')
                            ->withErrors($validator)
                            ->withInput();
    }

     // method untuk proses add data 
    public function store(Request $request)
    {
        // validasi form
        $validator = Validator::make($request->all(), [
            'cname' => 'required',
        ]);
        
        if(!$validator->fails()) {
        // insert data ke table products
        CategoriesModel::create([
            'categories_name' => $request->cname
        ]);

        // jika berhasil direct ke halaman product
        return redirect('/admin/category');
        }

        return redirect('/admin/category/add')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function delete($id)
    {
        $products = CategoriesModel::where('categories_id',$id);
        $products->delete();
    }
}
