<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HINHTHUCTHANHTOAN;

class HTTTController extends Controller
{
  public function __construct(HINHTHUCTHANHTOAN $model, Request $request)
    {
        $this->model    = $model;
    }

    public function getList(){
    	return view('admin.pages.hinhthucthanhtoan.index',[
            'auth'          => \Auth::user(),
            'data'          => $this->model->all(),
            'route'         => $this->model->route,
        ]);
    }

    public function getCreate()
	{
		return view('admin.pages.hinhthucthanhtoan.create',[
            'auth'          => \Auth::user(),
            'route'         => $this->model->route
        ]);
	}

	public function postCreate(Request $request){
        $this->model->create($request->all());
        session()->flash('flash_message', 'Thêm dữ liệu thành công');
        return redirect()->route('get.hinhthucthanhtoan.index');
	}

	public function getEdit($id)
	{
		return view('admin.pages.hinhthucthanhtoan.edit',[
            'auth'          => \Auth::user(),
            'route'         => $this->model->route,
            'data'			=> HINHTHUCTHANHTOAN::find($id)
        ]);
	}

	public function postEdit(Request $request, $id)
	{
        $this->model->find($id)->update($request->all());
        session()->flash('flash_message', 'Cập nhật dữ liệu thành công');
        return redirect()->back();
	}
	
}
