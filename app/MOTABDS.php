<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MOTABDS extends Model
{
	public $route = 'motabds';
	protected $table = 'motabds';
        protected $fillable = 
        [
			'id_bds',
			'dientich',
			'chieudai',
			'chieurong',
			'dientichxd',
			'dientichsd',
			'cautruc',
			'tiennghi',
			'ghichu',
        ];
        
        public  $rules =
        [
			'id_bds'	=> 'required',
			'dientich'	=> 'required',
			'chieudai'	=> 'required',
			'chieurong'	=> 'required',
			'dientichxd'=> 'required',
			'dientichsd'=> 'required',
			'cautruc',
			'tiennghi',
			'ghichu',
        ];

        public $messages = 
        [
			'id_bds.required'       	=> 'Chọn bất động sản',
			'dientich.required'    		=> 'Diện tích bất động sản là bắt buộc',
			'chieudai.required'     	=> 'Chiều dài bất động sản là bắt buộc',
			'chieurong.required'       	=> 'Chiều rộng bất động sản là bắt buộc',
			'dientichxd.required'       => 'Diện tích xây dựng bất động sản là bắt buộc',
			'dientichsd.required'      	=> 'Diện tích sử dụng bất động sản là bắt buộc',
        ];
}
