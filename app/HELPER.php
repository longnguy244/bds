<?php

function TenChucVu($id)
{
	$data = DB::table('chucvu')->find($id);
	echo $data->ten_cvu;
}

function LoaiBDS($id)
{
	$data = DB::table('loaibds')->find($id);
	echo $data->ten_loaibds;
}

function TenKhachHang($id)
{
	$data = DB::table('nhanvien')->find($id);
	echo $data->ten_nv;
}

function TenThanhPho($id)
{
	$data = DB::table('thanhpho')->find($id);
	echo $data->ten_tp;
}

function TenCSH($id)
{
	$data = DB::table('chusohuu')->find($id);
	echo $data->ten;
}