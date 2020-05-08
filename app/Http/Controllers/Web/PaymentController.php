<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BATDONGSAN;
use App\THANHTOAN;

class PaymentController extends Controller
{
    public function payment($id)
    {
        return view('web.pages.payment',[
            'bds' => BATDONGSAN::find($id),
        ]);
    }

    public function payment_accept(Request $request)
    {
        THANHTOAN::create([
            'kh_id' => $request['kh_id'],
            'bds_id' => $request['bds_id'],
            'sotien' => $request['sotien'],
        ]);
        return redirect('/');
    }
}
