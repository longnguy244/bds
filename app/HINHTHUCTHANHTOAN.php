<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HINHTHUCTHANHTOAN extends Model
{
    public $route = 'httt';
	protected $table = 'hinhthucthanhtoan';
	protected $fillable = 
	[
		'ten_httt',
		'ghichu',
		'hinhthucthanhtoan'
	];
	
}
