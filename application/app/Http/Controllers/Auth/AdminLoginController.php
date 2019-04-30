<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except' => ['logout','Adminlogout']]);
    }


    public function showLoginform()
    {
        return view ('auth.admin-login');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email'=>'required | email',
            'password'=>'required | min:6'
        ]);


        if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect(url('/admin'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));
    }


    public function Adminlogout()
    {
        Auth::guard('admin')->logout();

        return redirect('/admin/login');
    }
}
