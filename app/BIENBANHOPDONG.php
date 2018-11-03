<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BIENBANHOPDONG extends Model
{
	public $route = 'bienbanhopdong';
	protected $table = 'bienbanthanhly';
	protected $fillable = 
	[
		'id_hd',
		'lydothanhly',
		'ngaylapbb',
		'ghichu',
	];
	
	public  $rules =
	[
		'id_hd'			=> 'required',
		'lydothanhly'	=> 'required',
		'ngaylapbb'		=> 'required',
		'ghichu'		=> '',
	];

	public $messages = 
	[
		'id_hd.required'    	=> 'Chọn hợp đồng',
		'lydothanhly.required'  => 'Lý do thanh lý là bắt buộc',
		'ngaylapbb.required'    => 'Ngày lập biên bản là bắt buộc',
	];
}
