<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    public function login(Request $request){
        $data = $request->all();
        if ($data){
            $validator = $request->validate([
                'username'=>'required',
                'password'=>'required',
            ]);
            $auth = array(
                'username'=>$data['username'],
                'password'=>$data['password']
            );
            if (Auth::attempt($auth)){
                return redirect('admin');
            }
        }
        if(Auth::check()){
            return redirect('admin');
        }
        return view('admin.account.login');
    }
    public function profile(){
        return view('admin.account.profile');
    }
    public function logout(){
        Auth::logout();
        return redirect('admin/login');
    }
}
