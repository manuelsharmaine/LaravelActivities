<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserController extends Controller
{
    //


    public function index(){
       // $users = DB:  :table('users')->get();
        $users = User::get();   
        
        // return view('users.index', ['users' => $users]);
        // return view('users.index')->with('users',$users);
        
        return view('users.index', compact('users'));

        //return $users;
    }

    public function show($id){
        $user = User::where('id',$id)->first();

        return view('users.show',compact('user'));
    }
    
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
 
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/users');

    }
}
