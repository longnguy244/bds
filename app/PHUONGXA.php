<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PHUONGXA extends Model
{
	public $route = 'phuongxa';
	protected $table = 'phuongxa';
	protected $fillable = 
	[
		'id_quan',
		'ten_phuong',
		'ghichu',
	];
	
	public  $rules =
	[
		'id_quan'		=> 'required',
		'ten_phuong'    => 'required',
		'ghichu'        => '',
	];

	public $messages = 
	[
		'id_quan.required'       => 'Chọn quận',
		'ten_phuong.required'    => 'Tên phường xã không được phép để trống',
	];
}
