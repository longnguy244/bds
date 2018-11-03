<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\KHACHHANG;

class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(KHACHHANG $model, Request $request)
    {
        $this->model    = $model;
    }
    
    public function index()
    {
        return view('admin.pages.customers.index',[
            'auth'          => \Auth::user(),
            'data'          => $this->model->where('id_cvu',6)->get(),
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
        return view('admin.pages.customers.create',[
            'auth'          => \Auth::user(),
            'route'         => $this->model->route
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
        $this->validate($request,[
            'ten_nv'        => 'required',
            'ngaysinh_nv'   => '',
            'diachi_nv'     => 'required',
            'phone_nv'      => 'required|max:11,phone_nv',
            'email_nv'      => '',
            'hokhau'        => 'required',
            'cmnd_nv'       => 'required',
            'ngaycap_nv'    => 'required',
            'ghichu'        => '',
        ], $this->model->rules, $this->model->messages);
        $this->model->create($request->all());
        session()->flash('flash_message', 'Thêm dữ liệu thành công');
        return redirect(route('customer.index'));
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
        return view('admin.pages.customers.edit',[
            'auth'          => \Auth::user(),
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
        $this->validate($request,[
            'ten_nv'        => 'required',
            'ngaysinh_nv'   => '',
            'diachi_nv'     => 'required',
            'phone_nv'      => 'required|max:11,phone_nv,'.$id,
            'email_nv'      => '',
            'hokhau'        => 'required',
            'cmnd_nv'       => 'required',
            'ngaycap_nv'    => 'required',
            'ghichu'        => '',
        ], $this->model->rules, $this->model->messages);
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
        return redirect(route('customer.index'));
    }
}