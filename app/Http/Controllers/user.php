<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User as AuthUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class user extends Controller
{
    public function login(){
        return view('/login');
    }
    public function functionlogin(Request $request){
       $login=$request->validate([
        'name'=>'required',
        'password'=>'required'
       ]);
        Auth::attempt($login    );
       if (Auth::check()) {
        return response('welcome');
       }else{
        return back()->with('wrong','error');
       }

    }
    public function register(){
        return view('/register');
    }
    public function registerfunction(Request $request){
        $register=$request->validate([
            'name'=>'required|min:4',
            'password'=>'required|min:4|confirmed'
        ]);
        $insert=ModelsUser::create($register);
        if ($insert) {
            return redirect('/login')->with('success','register successfully');
        }
            return back()->withErrors('message','error');
    }
}
