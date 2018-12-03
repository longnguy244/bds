<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TIEUCHI;

class TieuChiController extends Controller
{
	public function __construct(TIEUCHI $model, Request $request)
    {
        $this->model    = $model;
    }

    public function getIndex()
	{
		return view('admin.pages.tieuchi.index',[
            'auth'          => \Auth::user(),
            'route'         => $this->model->route,
            'data'			=> TIEUCHI::get()
        ]);
	}

	public function getCreate()
	{
		return view('admin.pages.tieuchi.create',[
            'auth'          => \Auth::user(),
            'route'         => $this->model->route
        ]);
	}

	public function postCreate(Request $request){
        $this->model->create($request->all());
        session()->flash('flash_message', 'Thêm dữ liệu thành công');
        return redirect()->route('get.tieuchi.index');
	}

	public function getEdit($id)
	{
		return view('admin.pages.tieuchi.edit',[
            'auth'          => \Auth::user(),
            'route'         => $this->model->route,
            'data'			=> TIEUCHI::find($id)
        ]);
	}

	public function postEdit(Request $request, $id)
	{
        $this->model->find($id)->update($request->all());
        session()->flash('flash_message', 'Cập nhật dữ liệu thành công');
        return redirect()->back();
	}
}
