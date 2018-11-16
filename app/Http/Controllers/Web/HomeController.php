<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BATDONGSAN;
use App\FEEDBACK;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.pages.home',[
            'bds' => BATDONGSAN::all()->take(6),
            'data' => FEEDBACK::orderBy('created_at', 'DESC')->get()->take(6)
        ]);
    }


    public function detailBDS($aliasBDS)
    {
        return view('web.pages.chitiet_bds',
        [
            'bds' => BATDONGSAN::where('alias', $aliasBDS)->first(),
        ]);
    }
}
