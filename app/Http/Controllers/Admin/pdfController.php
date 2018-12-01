<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\HOPDONG;
use App\PHIEUTHU;


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
        return $pdf->download('bienban.pdf');
    }
}
