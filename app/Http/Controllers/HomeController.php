<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
    public function saveUser(){
        // return view('admin.allUser');
    }
    public function allUser(){
        $users = User::all();
        return view('admin.allUser',compact('users'));
    }
    public function allMessage(){
        return view('admin.allMessage');
    }
    public function sendMessage(){
        return view('admin.sendMessage');
    }

}
