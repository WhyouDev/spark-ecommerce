<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\UserManagementModel;
use Spatie\Permission\Models\Role;
use DataTables;
use Illuminate\Support\Facades\Validator;
use Session;
use Auth;

class UserController extends Controller
{

    // method untuk membuat json data user
    public function userjson(){
        $roles = User::with('roles')->get();
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

    // method untuk menampilkan data user
    public function index(){
        $userlist = User::all();
    	return view('admin.userlist',['userlist' => $userlist]);
    }

    // method untuk menampilkan halaman add data user
    public function add()
    {
        $userlist = User::all();
        $roles = Role::all();
        return view('admin.useradd',[
                                        'userlist' => $userlist,
                                        'roles' =>  $roles
                                        ]);
    }

    // method untuk menyimpan dari add data user
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
		    'uname' => ['required', 'string', 'max:255'],
            'umail' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', 'string', 'max:255'],
            'urole' => ['required'],
        ]);

        if(!$validate->fails()){
            $user = new User();
            $user->name             = $request->uname;
            $user->email            = $request->umail;
            $user->password         = bcrypt($request->password);
            $user->save();
            $user->assignRole($request->urole);   
            return redirect('/admin/user')->with(['success' => 'Add data successfully!']);
        }else{
            return redirect('/admin/user/add')
                        ->withErrors($validate)
                        ->withInput();
        }
    }

    // method untuk menampilkan halaman edit data user
    public function edit($id){
        $user = User::with('roles')->where('id',$id)->get();
        $roles = Role::all();
        return view('admin.useredit',['useredit' => $user,
                                      'roles' => $roles]);
     }
    
    // method untuk menyimpan data edit user
    public function storeedit(Request $request){
        $validator = Validator::make($request->all(), [
            'uname' => 'required',
            'umail' => 'required',
            'urole' => 'required',
        ]);

        if(!$validator->fails()) {
        $password = $request->password;
        if($password == NULL || $password == '' || empty($password)){
            $user = User::find($request->id);
            $user->name             = $request->uname;
            $user->email            = $request->umail;
            $user->password         = $request->oldpassword;
            $user->save();
            $user->syncRoles($request->urole);
            return redirect('/admin/user')->with(['success' => 'Update data successfully!']);
        }else{
            if($request->password == $request->password_confirmation){
                $user = User::find($request->id);
                $user->name             = $request->uname;
                $user->email            = $request->umail;
                $user->password         = bcrypt($request->password);
                $user->save();
                $user->syncRoles($request->urole);
                return redirect('/admin/user')->with(['success' => 'Update data successfully!']);
            }
            else{
                return redirect('/admin/user/')
                        ->withErrors("Password not match!")
                        ->withInput(); 
            }
        }    
        }
        return redirect('/admin/user/')
                        ->withErrors($validator)
                        ->withInput();
    }

    public function delete($id)
    {
        $user = User::where('id',$id);
        $user->delete();
    }
}
