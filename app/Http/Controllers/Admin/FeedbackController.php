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
 	
 	public function getIndex()
 	{
 		$auth = \Auth::user();
		$route = $this->model->route;
		$data = $this->model->all();
 		return view('admin.pages.phanhoi.index',compact('auth','route','data'));
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

 	public function getEdit($id)
 	{
 		$auth = \Auth::user();
		$route = $this->model->route;
 		$data = $this->model->find($id);
 		return view('admin.pages.phanhoi.edit',compact('auth','route','data'));
 	}  

 	public function postEdit(Request $request, $id)
 	{
 		
 		$data = $this->model->find($id);
 		$data->update($request->all());
 		return redirect()->back();
 	}

 	public function getDelete(Request $request, $id)
 	{
 		$data = $this->model->destroy($id);
 		return redirect()->route('get.feedback.index');
 	}  
}
