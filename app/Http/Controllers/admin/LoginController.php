<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLoginForm(){
        return view('auth.admin-login');
    }

    public function login(AdminLoginRequest $request){
        $remember_me = $request->has('remember_me') ? true:false;

        if(auth()->guard('admin') -> attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with(['error'=>'اسم المستخدم او كلمة المرور عير صحيحة '])->withInput($request->all());
    }
}
