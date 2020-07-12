<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use App\KHACHHANG;

class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = '/';
    
    public function getRegister()
    {
        return view('web.pages.register');
    }

    public function postRegister(Request $request)
    {
        $user = KHACHHANG::create([
            'ten_kh' => $request['ten_kh'],
            'email_kh' => $request['email_kh'],
            'ngaysinh_kh' => $request['ngaysinh_kh'],
            'password' => bcrypt($request['password']),
            'phone_kh' => $request['phone_kh'],
            'diachi_kh' => $request['diachi_kh'],
            'hokhau' => $request['hokhau'],
            'cmnd_kh' => $request['cmnd_kh'],
            'ngaycap_kh' => $request['ngaycap_kh'],
        ]);
        Auth::guard('customer')->login($user);
        return redirect('/');
    }
}
