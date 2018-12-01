<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\HOPDONG;
use App\PHIEUTHU;
use App\PHIEUCHI;


class pdfController extends Controller
{

	public function pdf($id)
    {
    	$data = HOPDONG::find($id);
    	$pdf = PDF::loadView('admin.pages.hopdong.pdf_hopdong',compact('data'));
    	return $pdf->download('hopdong.pdf');
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
