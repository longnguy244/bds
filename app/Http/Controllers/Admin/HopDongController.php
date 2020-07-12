<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\HOPDONG;
use App\KHACHHANG;
use App\BATDONGSAN;
use App\NHANVIEN;
use App\HINHTHUCTHANHTOAN;


class HopDongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(HOPDONG $model, Request $request)
    {
        $this->model    = $model;
    }
    
    public function index()
    {
        return view('admin.pages.hopdong.index',[
            'auth'          => \Auth::user(),
            'data'          => $this->model->where('status',0)->get(),
            'data1'          => $this->model->where('status',1)->get(),
            'data2'          => $this->model->where('status',2)->get(),
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
        return view('admin.pages.hopdong.create',[
            'auth'          => \Auth::user(),
            'nhanvien'      => NHANVIEN::all(),
            'customers'     => KHACHHANG::all(),
            'hinhthucthanhtoan'=> HINHTHUCTHANHTOAN::all(),
            'bds'           => BATDONGSAN::all(),
            'route'         => $this->model->route,
            'hinhthucthanhtoan'=> HINHTHUCTHANHTOAN::all()
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
        // dd($request->id_bds);
        if($request->status == 2){
            $bds = BATDONGSAN::find($request->id_bds);
            $bds->status = 0;
            $bds->update();
        }
        session()->flash('flash_message', 'Thêm dữ liệu thành công');
        return redirect(route('hopdong.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($this->model->find($id)->bds->id_loaibds);
        return view('admin.pages.hopdong.show', [
            'auth'          => \Auth::user(),
            'route'         => $this->model->route,
            'data'          => $this->model->find($id),
            'customers'     => KHACHHANG::get(),
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.hopdong.edit',[
            'auth'          => \Auth::user(),
            'customers'     => KHACHHANG::get(),
            'nhanvien'      => NHANVIEN::all(),
            'bds'           => BATDONGSAN::all(),
            'hinhthucthanhtoan'=> HINHTHUCTHANHTOAN::all(),
            'data'          => $this->model->find($id),
            'route'         => $this->model->route
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
        $this->validate($request, $this->model->rules, $this->model->messages);
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
        return redirect(route('hopdong.index'));
    }
    

    public function PDF_HopDong($id){
        $data = $this->model->find($id);
        return view('admin.pages.hopdong.show',compact('data'));
    }


    
}