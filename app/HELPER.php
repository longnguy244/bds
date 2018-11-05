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

function TenBDS($id)
{
	$data = DB::table('batdongsan')->find($id);
	echo $data->ten_bds;
}

function TenNhanVien($id)
{
	$data = DB::table('nhanvien')->find($id);
	echo $data->ten_nv;
}


function TenKhachHang($id)
{
	$data = DB::table('khachhang')->find($id);
	echo $data->ten_kh;
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