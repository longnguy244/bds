<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BATDONGSAN;
use App\FEEDBACK;
use App\MOTABDS;

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
            'data' => FEEDBACK::where('duyet',1)->orderBy('created_at', 'DESC')->get()->take(6)
        ]);
    }


    public function detailBDS($aliasBDS)
    {

        $bds = BATDONGSAN::where('alias', $aliasBDS)->first();
        $chitiet = MOTABDS::where('id_bds',$bds->id)->first();
        return view('web.pages.chitiet_bds',compact('bds','chitiet'));
    }
}
