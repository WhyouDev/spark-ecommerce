<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesModel;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Session;

class CategoryController extends Controller
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
    
    // method untuk membuat json list kategori
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

    // method untuk menampilkan halaman list kategori
    public function index()
    {
        $categorieslist = CategoriesModel::all();
        return view('admin.categorylist',['categorieslist' => $categorieslist]);
        return view( 'pages.shop', ['categorieslist' => $categorieslist]);
    }

     // method untuk menampilkan halaman tambah kategori
     public function add()
     {
         $categorieslist = CategoriesModel::all();
         return view('admin.categoryadd',['categorieslist' => $categorieslist]);
     }

    // method untuk menyimpan data dari add data kategori
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cname' => 'required',
        ]);
        
        if(!$validator->fails()) {
        CategoriesModel::create([
            'categories_name' => $request->cname
        ]);
        return redirect('/admin/category')->with(['success' => 'Add data successfully!']);
        }
        return redirect('/admin/category/add')
                        ->withErrors($validator)
                        ->withInput();
    }

     // method untuk menampilkan halaman edit kategori
    public function edit($id)
    {
        $categoryEdit = CategoriesModel::where('categories_id',$id)->get();
        return view('admin.categoryedit',['categoryEdit' => $categoryEdit]);
    }

    // method untuk menyimpan data edit data kategori
    public function storeedit(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'cname' => 'required'
        ]);
        
        if(!$validator->fails()) {
                $categories = CategoriesModel::where('categories_id',$id)
                ->update([
                   'categories_name' => $request->cname
                 ]);
            return redirect('/admin/category')->with(['success' => 'Update data successfully!']);
            }
            return redirect('/admin/category/edit/{{ $categories_id }}')
                            ->withErrors($validator)
                            ->withInput();
    }

    // method untuk menghapus data kategori
    public function delete($id)
    {
        $products = CategoriesModel::where('categories_id',$id);
        $products->delete();
    }
}
