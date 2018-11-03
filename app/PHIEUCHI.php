<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PHIEUCHI extends Model
{
	public $route = 'phieuchi';
	protected $table = 'phieuchi';
	protected $fillable = 
	[
		'id_nv',
		'id_hd',
		'lydochi',
		'tongtien',
		'ngaychi',
		'ghichu',
	];
	
	public  $rules =
	[
		'id_nv'		=> 'required',
		'id_hd'		=> 'required',
		'lydochi'	=> 'required',
		'tongtien'	=> 'required',
		'ngaychi'	=> 'required',
		'ghichu'	=> '',
	];

	public $messages = 
	[
		'id_nv.required'       	=> 'Nhân viên là bắt buộc',
		'id_hd.required'    	=> 'Chọn hợp đồng',
		'lydochi.required'     	=> 'Lý do chi là bắt buộc',
		'tongtien.required'     => 'Tổng tiền là bắt buộc',
		'ngaychi.required'      => 'Ngày chi là bắt buộc',
	];
}
