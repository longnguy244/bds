<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function getLogout()
    {
        Auth::guard('customer')->logout();
		// return redirect('/');
		return back();
    }
}
