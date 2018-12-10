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

function soCNQSDD($id)
{
	$data = DB::table('batdongsan')->find($id);
	echo $data->soCNQSDD;
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

function NgaySinhKhachHang($id)
{
	$data = DB::table('khachhang')->find($id);
	echo $data->ngaysinh_kh;
	# code...
}

function CMNDKhachHang($id)
{
	$data = DB::table('khachhang')->find($id);
	echo $data->cmnd_kh;
	# code...
}

function CMNDNgaycap($id)
{
	$data = DB::table('khachhang')->find($id);
	echo $data->ngaycap_kh;
	# code...
}

function HoKhauKH($id)
{
	$data = DB::table('khachhang')->find($id);
	echo $data->hokhau;
	# code...
}

function DiaChiKH($id)
{
	$data = DB::table('khachhang')->find($id);
	echo $data->diachi_kh;
	# code...
}

function SDTKH($id)
{
	$data = DB::table('khachhang')->find($id);
	echo $data->phone_kh;
	# code...
}

function ChungTu($id)
{
	$data = DB::table('hopdong')->find($id);
	echo $data->ghichu;
	# code...
}

function DCBDS($id)
{
	$data = DB::table('batdongsan')->find($id);
	echo $data->diachi_bds;
	# code...
}

function DTMD($id)
{
	$data = DB::table('motabds')->find($id);
	echo $data->dientich;
}

function DTXD($id)
{
	$data = DB::table('motabds')->where('id_bds',$id)->first();
	echo $data->dientichxd;
	# code...
}

function DTSD($id)
{
	$data = DB::table('motabds')->find($id);
	echo $data->dientichsd;
	# code...
}

function Cautruc($id)
{
	$data = DB::table('motabds')->find($id);
	echo $data->cautruc;
	# code...
}

function Tiennghi($id)
{
	$data = DB::table('motabds')->find($id);
	echo $data->tiennghi;
	# code...
}

function Tenhopdong($id)
{
	$data = DB::table('hopdong')->find($id);
	echo $data->ten_hd;
	# code...
}

function Tenhttt($id)
{
	$data = DB::table('hinhthucthanhtoan')->find($id);
	echo $data->ten_httt;
	# code...
}