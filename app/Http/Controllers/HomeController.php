<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\message;
use Hash;
use Auth;

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

       $addmessage = new message();

       $addmessage->letterNo = $request->letterId;
       $addmessage->date = $request->date;
       $addmessage->title = $request->title;
       $addmessage->referLetter = $request->refLetter;
       $addmessage->recipient_user_id = $request->toUser;
       $addmessage->detail = $request->message;
       $addmessage->files = json_encode($request->upload);
       $addmessage->sender_id = Auth::User()->id;

       $addmessage->save();

       return redirect()->back()->with('message','Successful Send Message');


    }

}
