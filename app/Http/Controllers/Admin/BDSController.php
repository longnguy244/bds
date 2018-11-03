<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BATDONGSAN;
use App\KHACHHANG;
use App\LOAIBDS;
use App\THANHPHO;
use App\CHUSOHUU;

class BDSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(BATDONGSAN $model, Request $request)
    {
        $this->model    = $model;
    }
    
    public function index()
    {
        return view('admin.pages.bds.index',[
            'auth'          => \Auth::user(),
            'data'          => $this->model->all(),
            'route'         => $this->model->route,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.bds.create',[
            'auth'          => \Auth::user(),
            'csh'           => CHUSOHUU::all(),
            'loaibds'      => LOAIBDS::all(),
            'city'         => THANHPHO::all(),
            'route'        => $this->model->route
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->model->rules, $this->model->messages);
        $this->model->create($request->all());
        session()->flash('flash_message', 'Thêm dữ liệu thành công');
        return redirect(route('bds.index'));
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
        return view('admin.pages.bds.edit',[
            'auth'          => \Auth::user(),
            'customers'    => KHACHHANG::where('id_cvu',6)->get(),
            'loaibds'      => LOAIBDS::all(),
            'city'         => THANHPHO::all(),
            'data'          => $this->model->find($id),
            'route'         => $this->model->route,

        ]);


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
        $this->validate($request,[
            'id_csh'         => 'required',
            'id_loaibds'    => 'required',
            'id_tp'         => 'required',
            'ten_bds'       => 'required',
            'alias'         => 'required|unique:batdongsan,alias,' . $id,
            'diachi_bds'    => 'required',
            'soCNQSDD'      => 'required|unique:batdongsan,soCNQSDD,' . $id,
            'ghichu',
            'toado'         => 'required',
        ], $this->model->messages);
        $this->model->find($id)->update($request->all());
        session()->flash('flash_message', 'Cập nhật dữ liệu thành công');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model->destroy($id);
        return redirect(route('bds.index'));
    }
}