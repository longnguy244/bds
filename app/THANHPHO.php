<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class THANHPHO extends Model
{
	public $route = 'thanhpho';
	protected $table = 'thanhpho';
	protected $fillable = 
	[
		'ten_tp',
		'ghichu',
	];
	
	public  $rules =
	[
		'ten_tp'        => 'required|unique:thanhpho,ten_tp',
		'ghichu'        => '',
	];

	public $messages = 
	[
		'ten_tp.required'       => 'Tên thành phố không được phép để trống',
		'ten_tp.unique'       	=> 'Tên thành phố không được trùng',
	];
}
