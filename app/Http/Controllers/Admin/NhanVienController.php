<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\NHANVIEN;
use App\CHUCVU;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(NHANVIEN $model, Request $request)
    {
        $this->model    = $model;
    }
    

    public function index()
    {
        $id = 6;
        return view('admin.pages.staffs.index',[
            'auth'          => \Auth::user(),
            'data'          => $this->model->whereNotIN('id_cvu',[6])->get(),
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
        return view('admin.pages.staffs.create',[
            'auth'          => \Auth::user(),
            'positions'     => CHUCVU::all(),
            'route'         => $this->model->route
        ]);
    }

    public function postCreateCustomer()
    {
        $this->validate($request, [
            'id_cvu'        => 'required',
            'ten_nv'        => 'required',
            'ngaysinh_nv'   => '',
            'diachi_nv'     => 'required',
            'phone_nv'      => 'required|max:11|unique:nhanvien,phone_nv',
            'email_nv'      => '',
            'cmnd_nv'       => 'required|unique:nhanvien,cmnd_nv',
            'ngaycap_nv'    => 'required',
            'ghichu'        => '',
        ], $this->model->messages);
        $this->model->create($request->all());
        session()->flash('flash_message', 'Thêm dữ liệu thành công');
        return redirect(route('staff.index'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_cvu'		=> 'required',
            'ten_nv'        => 'required',
            'ngaysinh_nv'   => '',
            'diachi_nv'     => 'required',
            'phone_nv'      => 'required|max:11|unique:nhanvien,phone_nv',
            'email_nv'      => '',
            'cmnd_nv'       => 'required|unique:nhanvien,cmnd_nv',
            'ngaycap_nv'    => 'required',
            'ghichu'        => '',
        ], $this->model->messages);
        $this->model->create($request->all());
        session()->flash('flash_message', 'Thêm dữ liệu thành công');
        return redirect(route('staff.index'));
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
        return view('admin.pages.staffs.edit',[
            'auth'          => \Auth::user(),
            'positions'     => CHUCVU::all(),
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

        $this->validate($request, [
		'id_cvu'		=> 'required',
		'ten_nv'        => 'required',
		'ngaysinh_nv'   => '',
		'diachi_nv'     => 'required',
		'phone_nv'      => 'required|max:11|unique:nhanvien,phone_nv,' . $id,
		'email_nv'      => '',
		'cmnd_nv'       => 'required|unique:nhanvien,cmnd_nv,' . $id,
		'ngaycap_nv'    => 'required',
		'ghichu'        => '',
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
        return redirect(route('staff.index'));
    }
}