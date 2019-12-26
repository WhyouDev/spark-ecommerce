<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Session;
use Auth;

class UserController extends Controller
{

    public function userjson(){
        $roles = User::with('roles')->get();
        //  dd($roles);
        return Datatables::of($roles)
         ->addColumn('action', function ($roles) {
                $btn = '
                <a href="user/edit/'.$roles->id.'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm editUser"><i class="fa fa-edit"></i>&nbspEdit</a>';
                $btn .= ' <button data-id="'.$roles->id.'" class="btn btn-danger btn-sm deleteUser"><i class="fa fa-trash"></i>&nbspDelete</button>';
                return $btn;
            }
        )
        ->addIndexColumn()
        ->make(true);
    }

    public function index(){
        // mengambil data 
        $userlist = User::all();
    	return view('admin.userlist',['userlist' => $userlist]);
    }
}
