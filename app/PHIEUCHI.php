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
		'lydochi',
		'tongtien',
		'ngaychi',
		'ghichu',
		'nguoinhantien',
		'CMND',
		'tongtienbangchu',
	];
	
	public  $rules =
	[
		'id_nv'		=> 'required',
		'lydochi'	=> 'required',
		'tongtien'	=> 'required',
		'ngaychi'	=> 'required',
		'ghichu'	=> '',
		'nguoinhantien' => '',
		'CMND' => '',
		'tongtienbangchu' => '',
	];

	public $messages = 
	[
		'id_nv.required'       	=> 'Nhân viên là bắt buộc',
		'lydochi.required'     	=> 'Lý do chi là bắt buộc',
		'tongtien.required'     => 'Tổng tiền là bắt buộc',
		'ngaychi.required'      => 'Ngày chi là bắt buộc',
	];
}
