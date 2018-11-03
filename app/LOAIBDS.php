<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LOAIBDS extends Model
{
	public $route = 'loaibds';
	protected $table = 'loaibds';
	protected $fillable = 
	[
		'ten_loaibds',
		'ghichu',
	];
	
	public  $rules =
	[
		'ten_loaibds'   => 'required',
		'ghichu'        => '',
	];

	public $messages = 
	[
		'ten_loaibds.required'       => 'Tên loại BĐS không được phép để trống',
	];
}
