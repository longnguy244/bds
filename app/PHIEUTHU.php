<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PHIEUTHU extends Model
{
	public $route = 'phieuthu';
	protected $table = 'phieuthu';
        protected $fillable = 
        [
			'id_nv',
			'id_hd',
			'lydothu',
			'tongtien',
			'ngaythu',
			'ghichu',
        ];
        
        public  $rules =
        [
			'id_nv'		=> 'required',
			'id_hd'		=> 'required',
			'lydothu'	=> 'required',
			'tongtien'	=> 'required',
			'ngaythu'	=> 'required',
			'ghichu'	=> '',
        ];

        public $messages = 
        [
			'id_nv.required'       	=> 'Nhân viên là bắt buộc',
			'id_hd.required'    	=> 'Chọn hợp đồng',
			'lydothu.required'     	=> 'Lý do thu là bắt buộc',
			'tongtien.required'     => 'Tổng tiền là bắt buộc',
			'ngaythu.required'      => 'Ngày thu là bắt buộc',
        ];
}
