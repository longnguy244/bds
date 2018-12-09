<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use App\MOTABDS;
use App\BATDONGSAN;
use App\TIEUCHI;
use App\TIEUCHIBDS;
use App\HINHANHBDS;
use Request;
use App\Home;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(HOME $model, Request $request)
    {
        $this->model    = $model;
    }
    public function index()
    {
        return view('admin.pages.home',[
            'route'         => $this->model->route,
            'auth'          => \Auth::user(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

     public function getDeleteHinhAnh($id)
    {
        if(Request::ajax()){
            $id_hinh = (int)Request::get('id_hinh');
            $hinh = HINHANHBDS::find($id_hinh);
            if(!empty($hinh)){
                $img = 'upload/bds/detail/'.$hinh->hinhanh;
                if(File::exists($img)){
                    File::delete($img);
                }
                $hinh->delete();
            }
            return "OK";
        }
    }
}
