<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FEEDBACK;

class FeedbackController extends Controller
{
	public function __construct(FEEDBACK $model, Request $request)
    {
        $this->model    = $model;
    }
 
 	public function getCreate()
 	{
 		$auth = \Auth::user();
		$route = $this->model->route;
 		return view('admin.pages.phanhoi.create',compact('auth','route'));
 	}

 	public function postCreate(Request $request)
 	{
 		$data = $request->all();
 		$insert = new FEEDBACK($data);
 		$insert->save();
 		
 		return back();
 	}   
}
