<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CHUCVU extends Model
{
	public $route = 'chucvu';
	protected $table = 'chucvu';
	protected $fillable = 
	[
		'ten_cvu',
		'ghichu',
	];
	
	public  $rules =
	[
		'ten_cvu'        => 'required',
		'ghichu'        => '',
	];

	public $messages = 
	[
		'ten_cvu.required'       => 'Tên chức vụ không được phép để trống',
	];
}
