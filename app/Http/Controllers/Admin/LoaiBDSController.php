<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\LOAIBDS;

class LoaiBDSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(LOAIBDS $model, Request $request)
    {
        $this->model    = $model;
    }

    public function index()
    {
        return view('admin.pages.loaibds.index',[
            'auth'          => \Auth::user(),
            'data'          => $this->model->all(),
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
        return view('admin.pages.loaibds.create',[
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
        $this->validate($request, $this->model->rules, $this->model->messages);
        $this->model->create($request->all());
        session()->flash('flash_message', 'Thêm dữ liệu thành công');
        return redirect(route('loaibds.index'));
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
        return view('admin.pages.loaibds.edit',[
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
        $this->validate($request, $this->model->rules, $this->model->messages);
        $this->model->find($id)->update($request->all());
        session()->flash('flash_message', 'Cập nhật dữ liệu thành công');
        return redirect(route('loaibds.index'));
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
        return redirect(route('loaibds.index'));
    }
}
