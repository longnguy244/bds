<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\MOTABDS;
use App\BATDONGSAN;
use App\TIEUCHI;
use App\TIEUCHIBDS;
use App\HINHANHBDS;


class MoTaBDSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(MOTABDS $model, Request $request)
    {
        $this->model    = $model;
    }

    
    public function index()
    {
        return view('admin.pages.motabds.index',[
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
        return view('admin.pages.motabds.create',[
            'auth'      => \Auth::user(),
            'bds'       => BATDONGSAN::all(),
            'route'     => $this->model->route,
            'data'      => BATDONGSAN::orderBy('created_at','DESC')->first(),
            'tieuchi'      => TIEUCHI::get(),
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


        if(Input::hasFile('imgDetail')){
            foreach ($request->imgDetail as $key => $hinh) {
                $imgDetail = new HINHANHBDS();
                if(isset($hinh)){
                    $imgDetail->hinhanh = $request->input('id_bds').'-'.date('Y-m-d-H-i-s').'-'.$key.'.'.$hinh->getClientOriginalExtension();
                    $imgDetail->id_bds = $request->input('id_bds');
                    $hinh->move('upload/bds/detail/',$request->input('id_bds').'-'.date('Y-m-d-H-i-s').'-'.$key.'.'.$hinh->getClientOriginalExtension());
                    $imgDetail->save();
                }
            }
        }

        if($request->tieuchi){
            foreach ($request->tieuchi as $key => $id){
                $tieuchi = new TIEUCHIBDS();
                $tieuchi->id_tieuchi = $id;
                $tieuchi->id_bds = $request->input('id_bds');
                $tieuchi->save();
            }
        }
        $this->validate($request, $this->model->rules, $this->model->messages);
        $this->model->create($request->only('id_bds','dientich','chieudai','chieurong','dientichxd','dientichsd','phongngu','phongtam','cautruc','tiennghi','ghichu'));

        

        
        session()->flash('flash_message', 'Thêm dữ liệu thành công');
        return redirect(route('bds.index'));
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
        

        $data = MOTABDS::where('id_bds',$id)->first();
        $auth = \Auth::user();
        $bds = BATDONGSAN::where('id',$id)->first();
        $hinhanh = HINHANHBDS::where('id_bds',$bds->id)->get();
        $tieuchi = TIEUCHI::get();
        $tieuchibds = TIEUCHIBDS::where('id_bds',$id)->get();

        $route = $this->model->route;
        return view('admin.pages.motabds.edit',compact('data','auth','bds','route','tieuchi','tieuchibds','hinhanh'));
            
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

        if(Input::hasFile('imgDetail')){
            foreach ($request->imgDetail as $key => $hinh) {
                $imgDetail = new HINHANHBDS();
                if(isset($hinh)){
                    $imgDetail->hinhanh = $request->input('id_bds').'-'.date('Y-m-d-H-i-s').'-'.$key.'.'.$hinh->getClientOriginalExtension();
                    $imgDetail->id_bds = $request->input('id_bds');
                    $hinh->move('upload/bds/detail/',$request->input('id_bds').'-'.date('Y-m-d-H-i-s').'-'.$key.'.'.$hinh->getClientOriginalExtension());
                    $imgDetail->save();
                }
            }
        }

        $this->validate($request, $this->model->rules, $this->model->messages);
        $this->model->find($id)->update($request->only('id_bds','dientich','chieudai','chieurong','dientichxd','dientichsd','phongngu','phongtam','cautruc','tiennghi','ghichu'));

            $data = MOTABDS::find($id);

            $deleteTC = TIEUCHIBDS::where('id_bds',$data->id_bds)->get();
            foreach ($deleteTC as $key => $delete) {
                $delete->delete();
            }

            if($request->tieuchi != null){
                foreach ($request->tieuchi as $key => $id_tieuchi){
                
                    $tieuchibds = TIEUCHIBDS::where('id_tieuchi','=',$id_tieuchi)->where('id_bds',$data->id_bds)->first();
                    if($tieuchibds == null){
                        $tieuchi = new TIEUCHIBDS();
                        $tieuchi->id_tieuchi = $id_tieuchi;
                        $tieuchi->id_bds = $request->input('id_bds');
                        $tieuchi->save();
                    }
                }
            }
        session()->flash('flash_message', 'Cập nhật dữ liệu thành công');
        return redirect()->route('bds.index');
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
        return redirect(route('motabds.index'));
    }


}