<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductModel;
use App\Models\CategoriesModel;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Session;

class ProductController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:admin']);
    }

    // method untuk membuat json data produk
    public function productjson(){
        $productlist = ProductModel::with('Category')->get();
        return Datatables::of($productlist)
         ->addColumn('action', function ($productlist) {
                $btn = '
                <a href="product/edit/'.$productlist->products_id.'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct"><i class="fa fa-edit"></i>&nbspEdit</a>';


                $btn .= ' <button data-id="'.$productlist->products_id.'" class="btn btn-danger btn-sm deleteProduct"><i class="fa fa-trash"></i>&nbspDelete</button>';
                      
                
                return $btn;
            }
        )
        ->addIndexColumn()
        ->make(true);
    }

    // method untuk menampilkan data produk
    public function index()
    {
        $productlist = ProductModel::with('Category')->get();
    	return view('admin.productlist',['productlist' => $productlist]);
    }

    // method untuk menampilkan halaman tambah data produk
    public function add()
    {
        $categorieslist = CategoriesModel::all();
        return view('admin.productadd',['categorieslist' => $categorieslist]);
    }

    // method untuk menyimpan data dari tambah produk
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pname' => 'required',
            'pcat' => 'required',
            'ptag' => 'required',
            'pdetail' => 'required',
            'pprice' => 'required',
            'pfile' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'pqty' => 'required',
            'putype' => 'required'
        ]);
        
        if(!$validator->fails()) {
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('pfile');
        // menyimpan nama file kedalam variable namafoto
        $namaphoto =    $file->getClientOriginalName();
        // pisahin extension dengan nama file
        $tmp = explode('.', $namaphoto);
        $file_extension = end($tmp);
        // buat nama file acak + extension
        $newfilename = uniqid().'.'.$file_extension;

        // file dir
        $tujuan_upload = 'img_products/';
        // proses upload
        $file->move($tujuan_upload,$newfilename);
        
        // insert data ke table products
        // $product = new ProductModel();
        // $product->products_name = $request->pname;
        // $product->save();
        // dd($product->id)

        ProductModel::create([
            'categories_id' => $request->pcat,
            'products_name' => $request->pname,
            'products_tagline' => $request->ptag,
            'products_details' => $request->pdetail,
            'price' => $request->pprice,
            'products_photo' => $newfilename,
            'products_stock' => $request->pqty,
            'products_unittype' => $request->putype
        ]);
        return redirect('/admin/product');
        }
        return redirect('/admin/product/add')
                        ->withErrors($validator)
                        ->withInput();
    }

    // method untuk menampilkan halaman edit data produk
    public function edit($id)
    {
        $categorieslist = CategoriesModel::all();
        $productEdit = ProductModel::where('products_id',$id)->get();
        return view('admin.editproduct',[
                                            'productEdit' => $productEdit,
                                            'categorieslist' => $categorieslist,
                                        ]);
    }

    // method untuk menyimpan data dari edit data produk
    public function storeedit(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'pname' => 'required',
            'pcat' => 'required',
            'ptag' => 'required',
            'pdetail' => 'required',
            'pprice' => 'required',
            'pqty' => 'required',
            'putype' => 'required'
        ]);
        
        if(!$validator->fails()) {
            if(!empty($request->pfile)){
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('pfile');
            // menyimpan nama file kedalam variable namafoto
            $namaphoto = $file->getClientOriginalName();
            // pisahin extension dengan nama file
            $tmp = explode('.', $namaphoto);
            $file_extension = end($tmp);
            // buat nama file acak + extension
            $newfilename = uniqid().'.'.$file_extension;
            // file dir
            $tujuan_upload = 'img_products/';
            // proses upload
            $file->move($tujuan_upload,$newfilename);
            }else{
            // kalo kosong pake file lama
            $newfilename = $request->oldpfile;
            }
            
            $categories = ProductModel::where('products_id',$id)
                ->update([
                   'categories_id' => $request->pcat,
                   'products_name' => $request->pname,
                   'products_tagline' => $request->ptag,
                   'products_details' => $request->pdetail,
                   'price' => $request->pprice,
                   'products_photo' => $newfilename,
                   'products_stock' => $request->pqty,
                   'products_unittype' => $request->putype
                 ]);
            return redirect('/admin/product');
            }
            return redirect('/admin/product/edit/{{ $products_edit }}')
                            ->withErrors($validator)
                            ->withInput();
    }

    public function delete($id)
    {
        $products = ProductModel::where('products_id',$id);
        $products->delete();
    }

}
