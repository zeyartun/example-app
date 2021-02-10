<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function addUser(){
        return view('admin.addUser');
    }
    public function saveUser(request $request){ 
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect(url('/admin/allUser'));

    }
    public function allUser(){
        $users = User::all();
        return view('admin.allUser',compact('users'));
    }
    public function allMessage(){
        return view('admin.allMessage');
    }
    public function sendMessage(){
        $users = User::all();
        return view('admin.sendMessage',compact('users'));
    }
    public function saveMessage(request $request){
        dd($request);
    }

}
