<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BATDONGSAN extends Model
{
	public $route = 'batdongsan';
	protected $table = 'batdongsan';
        protected $fillable = 
        [
			'id_csh',
			'id_loaibds',
			'id_tp',
			'ten_bds',
			'alias',
			'diachi_bds',
			'soCNQSDD',
			'ghichu',
			'toado',
			'hinhthuc',
			'gia'
        ];
        
        public  $rules =
        [
			'id_csh'			=> 'required',
			'id_loaibds'	=> 'required',
			'id_tp'			=> 'required',
			'ten_bds'		=> 'required',
			'alias'			=> 'required|unique:batdongsan,alias',
			'diachi_bds'	=> 'required',
			'soCNQSDD'		=> 'required|unique:batdongsan,soCNQSDD',
			'ghichu',
			'toado'			=> 'required',
			'hinhthuc',
			'gia',

        ];

        public $messages = 
        [
			'id_csh.required'       		=> 'Chọn khách hàng',
			'id_loaibds.required'    	=> 'Chọn loại bất động sản',
			'id_tp.required'     		=> 'Chọn thành phố',
			'ten_bds.required'       	=> 'Tên bất động sản không được phép để trống',
			'alias.required'       		=> 'Alias không được phép để trống',
			'alias.unique'       		=> 'Alias không được phép trùng',
			'diachi_bds.required'      	=> 'Địa chỉ bất động sản không được phép để trống',
			'soCNQSDD.required'       	=> 'Số CNQSDD không được phép để trống',
			'soCNQSDD.unique'       	=> 'Số CNQSDD đã được sử dụng',
			'toado.required'       		=> 'Tọa độ không được phép để trống',
		];
		
		public function motabds()
		{
			return $this->hasOne('App\MOTABDS','id_bds');
		}

		public function hopdong()
		{
			return $this->hasOne('App\HOPDONG','id_bds');
		}
}
