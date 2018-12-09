<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\HOADON;
use App\HOPDONG;
use App\NHANVIEN;

class HoaDonController extends Controller
{
    public function __construct(HOADON $model, Request $request)
    {
        $this->model    = $model;
    }


	public function getIndex()
 	{
 		$auth = \Auth::user();
		$route = $this->model->route;
		$data = $this->model->all();
 		return view('admin.pages.hoadon.index',compact('auth','route','data'));
 	}

 	public function getCreate(){
 		$auth = \Auth::user();
		$route = $this->model->route;
		$hopdong = HOPDONG::get();
		$nhanvien = NHANVIEN::get();
 		return view('admin.pages.hoadon.create',compact('auth','route','hopdong', 'nhanvien'));
 	}

 	public function postCreate(Request $request){
 		$this->model->create($request->all());
 		return redirect()->route('get.hoadon.index');
 	}

 	public function getEdit($id){
 		$auth = \Auth::user();
		$route = $this->model->route;
		$data = $this->model->find($id);
		$hopdong = HOPDONG::get();
		$nhanvien = NHANVIEN::get();
 		return view('admin.pages.hoadon.edit',compact('auth','route','hopdong','data','nhanvien'));
 	}


 	public function postEdit(Request $request,$id){
 		$this->model->find($id)->update($request->all());
 		return redirect()->back();
 	}

 	public function getDelete($id){
 		$this->model->destroy($id);
 		return redirect()->route('get.hoadon.index');
 	}

}
