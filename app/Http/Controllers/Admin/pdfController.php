<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\HOPDONG;
use App\PHIEUTHU;
use App\PHIEUCHI;
use App\BIENBANHOPDONG;


class pdfController extends Controller
{

	public function pdf($id)
    {
    	$data = HOPDONG::find($id);
    	$pdf = PDF::loadView('admin.pages.hopdong.pdf_hopdong',compact('data'));
    	return $pdf->download('hopdong.pdf');
    }

    public function pdf_bien_ban($id)
    {
        $data = BIENBANHOPDONG::find($id);
        $pdf = PDF::loadView('admin.pages.bienban.pdf_bienban',compact('data'));
        return $pdf->download('bienban-'.$data->id_hd.'.pdf');
    }

    public function pdf_phieu_thu($id)
    {
        $data = PHIEUTHU::find($id);
        $pdf = PDF::loadView('admin.pages.phieuthu.pdf_phieuthu',compact('data'));
        return $pdf->download('phieuthu-'.$data->id_hd.'-'.$data->id.'.pdf');
    }

    public function pdf_phieu_chi($id)
    {
        $data = PHIEUCHI::find($id);
        $pdf = PDF::loadView('admin.pages.phieuchi.pdf_phieuchi',compact('data'));
        return $pdf->download('phieuchi'.$data->id.'.pdf');
    }
}
