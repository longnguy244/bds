<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BAIVIET extends Model
{
	public $route = 'baiviet';
	protected $table = 'baiviet';
        protected $fillable = 
        [
			'id_bds',
			'ten_bv',
			'alias',
			'noidung',
			'trangthai',
			'view',
			'ghichu',
        ];
        
        public  $rules =
        [
			'id_bds'	=> 'required',
			'ten_bv'		=> 'required',
			'alias'		=> 'required',
			'noidung'	=> '',
			'trangthai'	=> 'required',
			'view'		=> '',
			'ghichu',
        ];

        public $messages = 
        [
			'id_bds.required'       => 'Chọn bất động sản',
			'ten_bv.required'    	=> 'Tên bài viết là bắt buộc',
			'alias.required'     	=> 'Alias là bắt buộc',
			'trangthai.required'    => 'Trạng thái là bắt buộc',
        ];
}
