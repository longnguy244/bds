<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\THONGKE;

class ThongKeController extends Controller
{
    public function __construct(THONGKE $model, Request $request)
    {
        $this->model    = $model;
	}
	
    public function getThang()
 	{

		 return view('admin.pages.thongke.thang',
		[
			'auth' => \Auth::user(),
            'route'         => $this->model->route,
		]
		);
 	}

 	public function getQuy()
 	{
 		
 		return view('admin.pages.thongke.quy',
 			[
			'auth' => \Auth::user(),
            'route'         => $this->model->route,
		]);
 	}

 	public function getNam()
 	{
 		
 		return view('admin.pages.thongke.nam',[
			'auth' => \Auth::user(),
            'route'         => $this->model->route,
		]);
 	}
}
