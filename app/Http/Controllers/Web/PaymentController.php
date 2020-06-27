<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\BATDONGSAN;
use App\THANHTOAN;
use App\HOPDONG;
use App\KHACHHANG;

class PaymentController extends Controller
{
    public function payment($id)
    {
        return view('web.pages.payment',[
            'bds' => BATDONGSAN::find($id),
        ]);
    }

    public function payment_check($id)
    {
        return view('web.pages.check-payment',[
            'bds' => BATDONGSAN::find($id),
        ]);
    }

    public function payment_accept(Request $request, $id)
    {
        THANHTOAN::create([
            'kh_id' => $request['kh_id'],
            'bds_id' => $request['bds_id'],
            'sotien' => $request['sotien'],
        ]);
        $bds = BATDONGSAN::find($id);
        $bds->status = 1;
        $bds->update();
        return redirect()->route('hopdong', $id);
    }
    
    public function hopdong($id)
    {
        return view('web.pages.submit',[
            'bds' => BATDONGSAN::find($id),
            'kh' => Auth::guard('customer')->user(),
            'data' => HOPDONG::find($id),
        ]);
    }
    
    public function show_hopdong(Request $request)
    {
        $id_bds = $request->input('id_bds');
        $id_kh = $request->input('id_kh');
        return view('web.pages.hopdong',[
            'data' => HOPDONG::where('id_bds',$id_bds)
                                ->where('id_kh', $id_kh)
                                ->first(),
        ]);
    }

    public function save_hopdong(Request $request)
    {
        HOPDONG::create($request->all());
        // redirect()->route('get.hopdong');
        return redirect('/');
    }
}
