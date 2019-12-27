<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderModel;
use App\Models\OrderDetailModel;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Session;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:admin']);
    }

    // method untuk membuat json data produk
    public function orderjson(){
        $orderlist = OrderModel::with('User')->get();       
        return Datatables::of($orderlist)
        ->addColumn('user', function ($orderlist) {
            return $orderlist->user->name;
        })
        ->addColumn('action', function ($orderlist) {
                $btn = '
                <a href="order/detail/'.$orderlist->orders_id.'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm detailOrder"><i class="fa fa-eye"></i>&nbsp Detail</a>';
                $btn .= ' <button data-id="'.$orderlist->orders_id.'" class="btn btn-danger btn-sm deleteOrder"><i class="fa fa-trash"></i>&nbspDelete</button>';
                return $btn;
            }
        )
        ->addIndexColumn()
        ->make(true);
    }

    // method untuk membuat json data produk
    public function orderdetailjson($id){
        $detailorder = OrderDetailModel::with('Order','Product')->get();       
        return Datatables::of($detailorder)
        ->addColumn('products_name', function ($detailorder) {
            return $detailorder->product->products_name;
        })
        ->addIndexColumn()
        ->make(true);
    }

    // method untuk menampilkan data produk
    public function index()
    {
        $orderlist = OrderModel::with('User')->get();
    	return view('admin.orderlist',['orderlist' => $orderlist]);
    }

    public function detail($id)
    {
        $orderdetail = OrderDetailModel::with('Order')->where('orders_id', $id)->get();
        //dd($orderdetail);
    	return view('admin.orderdetail',['orderdetail' => $orderdetail]);
    }
}
