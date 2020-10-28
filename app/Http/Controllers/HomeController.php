<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
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
    public function admin()
    {
        return view('home');
    }
    public function denieAcess()
    {
        return view('/denie-acess');
    }
    public function addRole(Request $request)
    {
        $user = User::where('email',$request['email'])->first();
        $user->roles()->detach();
        if($request['Role_Admin']){
       $user->roles()->attach(Role::where('name' , 'Admin')->first());
        }
        if($request['Role_Editeur']){
            $user->roles()->attach(Role::where('name' , 'Editeur')->first());
        }
        if($request['Role_User']){
            $user->roles()->attach(Role::where('name' , 'User')->first());
        }
             
        return redirect()->back();
    }

public function index()
    {
        return view('home');
    }


}
