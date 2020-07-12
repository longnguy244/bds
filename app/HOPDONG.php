<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HOPDONG extends Model
{
	public $route = 'hopdong';
	protected $table = 'hopdong';
        protected $fillable = 
        [
			'id_bds',
			'id_kh',
			'id_nv',
			'id_httt',
			'ten_hd',
			'giaban',
			'giathue',
			'phi_mg',
			'phi_dangbai',
			'huehong',
			'thoihanhopdong',
			'ngaylaphd',
			'ghichu',
			'status',
        ];
        
        public  $rules =
        [
			'id_bds'			=> 'required',
			'id_kh'				=> 'required',
			'id_nv'				=> 'required',
			// 'id_httt'			=> 'required',
			'ten_hd'			=> 'required',
			'giaban'			=> 'required',
			'giathue'			=> 'required',
			'phi_mg'			=> 'required',
			'phi_dangbai'		=> 'required',
			'huehong'			=> 'required',
			'thoihanhopdong'	=> 'required',
			'ngaylaphd'			=> 'required',
			'ghichu',
			'status'			=> 'required',
        ];

        public $messages = 
        [
			'id_bds.required'       		=> 'Chọn bất động sản',
			'id_kh.required'       			=> 'Chọn khách hàng',
			'id_nv.required'    			=> 'Nhân viên không được phép để trống',
			// 'id_httt.required'    			=> 'Hình thức thanh toán không được phép để trống',
			'ten_hd.required'     			=> 'Tên hợp đồng không được phép để trống',
			'giaban.required'       		=> 'Giá bán không được phép để trống',
			'giathue.required'      		=> 'Giá thuê không được phép để trống',
			'phi_mg.required'   			=> 'Phí môi giới không được phép để trống',
			'phi_dangbai.required'       	=> 'Phí đăng bài không được phép để trống',
			'huehong.required'       		=> 'Huê hồng không được phép để trống',
			'thoihanhopdong.required'       => 'Thời hạn hợp đồng không được phép để trống',
			'status.required'       		=> 'Vui lòng chọn loại hợp đồng',
		];
			
		public function bds()
		{
			return $this->belongsTo('App\BATDONGSAN', 'id_bds');
		}

		public function kh()
		{
			return $this->belongsTo('App\KHACHHANG', 'id_kh');
		}
}
