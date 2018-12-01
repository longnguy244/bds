<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\HOPDONG;


class pdfController extends Controller
{

	public function pdf($id)
    {
    	$data = HOPDONG::find($id);
    	$pdf = PDF::loadView('admin.pages.hopdong.pdf_hopdong',compact('data'));
    	return $pdf->download('hopdong.pdf');
    }

    public function pdf($id)
    {
    	$data = BIENBAN::find($id);
    	$pdf = PDF::loadView('admin.pages.bienban.pdf_bienban',compact('data'));
    	return $pdf->download('bienban.pdf');
    }
}
