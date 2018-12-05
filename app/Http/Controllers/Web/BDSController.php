<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\BATDONGSAN;
use App\THANHPHO;
use App\LOAIBDS;
use App\MOTABDS;
use App\TIEUCHI;
use App\TIEUCHIBDS;

class BDSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bds =  BATDONGSAN::orderBy('created_at','DESC')->paginate(9);
        $thanhpho = THANHPHO::get();
        $loai = LOAIBDS::get();
        $chitietbds = MOTABDS::get();
        $tieuchi = TIEUCHI::get();
        
        return view('web.pages.batdongsan',compact('bds','thanhpho','loai','chitietbds','tieuchi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSearch(Request $request)
    {
            $thanhpho = THANHPHO::get();
            $loai = LOAIBDS::get();
            $chitietbds = MOTABDS::get();
            $tieuchi = TIEUCHI::get();

            $bds = BATDONGSAN::join('loaibds','batdongsan.id_loaibds','=','loaibds.id')
                        ->join('thanhpho','thanhpho.id','=','batdongsan.id_tp')
                        ->join('motabds','motabds.id_bds','=','batdongsan.id')
                        //->where('batdongsan.id',$data->id_bds)
                        ->where('ten_bds','like','%'.$request->name.'%')
                        ->where('phongngu',$request->phongngu)
                        ->where('id_tp',$request->thanhpho)
                        ->where('id_loaibds',$request->loai)
                        ->orderBy('batdongsan.created_at','DESC')->paginate(9);

            return view('web.pages.batdongsan',compact('bds','thanhpho','loai','chitietbds','tieuchi'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
