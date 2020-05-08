<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use Auth;
use Session;
use App\KHACHHANG;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function username()
    {
        return $this->email_kh;
    }

    public function getLogin()
    {
        return view('web.pages.login');
    }

    public function postLogin(Request $request)
    {
        
        $data = [
            'email_kh' => $request->email_kh,
            'password' => $request->password
        ];
        // dd(Auth::guard('customer')->attempt($data));
        if(Auth::guard('customer')->attempt($data)){
            // dd('success');
            return redirect('/');
        }
        else{
            // dd('fail');
            Session::flash('message', 'Email hoặc mật khẩu không đúng!');
			return redirect('dangnhap')->withInput($request->except('password'));
        }
    }
}
