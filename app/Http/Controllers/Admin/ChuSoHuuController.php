<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\CHUSOHUU;




class ChuSoHuuController extends Controller
{
	
	public function __construct(CHUSOHUU $model, Request $request)
    {
        $this->model    = $model;
    }

    public function getList()
	{
		$data = $this->model->all();
		$auth = \Auth::user();
		$route = $this->model->route;
		return view('admin.pages.chusohuu.index',compact('auth','route','data'));
	}

	public function getCreate()
	{
		$auth = \Auth::user();
		$route = $this->model->route;
		return view('admin.pages.chusohuu.create',compact('auth','route'));
	}

	public function postCreate(Request $request)
	{
		$data = $request->all();
		$insertData = new CHUSOHUU($data);
		$insertData->save();
		
		return redirect()->route('get.list.chusohuu');
	}

	public function getEdit($id)
	{
		$data = $this->model->find($id);
		$auth = \Auth::user();
		$route = $this->model->route;
		return view('admin.pages.chusohuu.edit',compact('auth','route','data'));
	}

	public function postEdit(Request $request, $id)
	{
		$data = CHUSOHUU::find($id);
		$data->update(request()->all());
		$data->save();
		return redirect()->back();
	}
}