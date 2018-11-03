<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QUANHUYEN extends Model
{
	public $route = 'quanhuyen';
	protected $table = 'quanhuyen';
	protected $fillable = 
	[
		'id_tp',
		'ten_quan',
		'ghichu',
	];
	
	public  $rules =
	[
		'id_tp'			=> 'required',
		'ten_quan'      => 'required',
		'ghichu'        => '',
	];

	public $messages = 
	[
		'id_tp.required'       => 'Chọn thành phố',
		'ten_quan.required'    => 'Tên quận huyện không được phép để trống',
	];
}
