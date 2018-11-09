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
			'ten_kh',
			'id_nv',
			'ten_hd',
			'giaban',
			'giathue',
			'phi_mg',
			'phi_dangbai',
			'huehong',
			'hinhthucthanhtoan',
			'solanthanhtoan',
			'thoihanthanhtoan',
			'thoihanhopdong',
			'ngaylaphd',
			'ghichu',
        ];
        
        public  $rules =
        [
			'id_bds'			=> 'required',
			'id_kh'				=> 'required',
			'ten_kh'			=> 'required',
			'id_nv'				=> 'required',
			'ten_hd'			=> 'required',
			'giaban'			=> 'required',
			'giathue'			=> 'required',
			'phi_mg'			=> 'required',
			'phi_dangbai'		=> 'required',
			'huehong'			=> 'required',
			'hinhthucthanhtoan'	=> 'required',
			'solanthanhtoan'	=> 'required',
			'thoihanthanhtoan'	=> 'required',
			'thoihanhopdong'	=> 'required',
			'ngaylaphd'			=> 'required',
			'ghichu',
        ];

        public $messages = 
        [
			'id_bds.required'       		=> 'Chọn bất động sản',
			'id_kh.required'       			=> 'Chọn khách hàng',
			'ten_kh.required'      			=> 'Tên khách hàng',
			'id_nv.required'    			=> 'Nhân viên không được phép để trống',
			'ten_hd.required'     			=> 'Tên hợp đồng không được phép để trống',
			'giaban.required'       		=> 'Giá bán không được phép để trống',
			'giathue.required'      		=> 'Giá thuê không được phép để trống',
			'phi_mg.required'   			=> 'Phí môi giới không được phép để trống',
			'phi_dangbai.required'       	=> 'Phí đăng bài không được phép để trống',
			'huehong.required'       		=> 'Huê hồng không được phép để trống',
			'hinhthucthanhtoan.required'    => 'Hình thức thanh toán không được phép để trống',
			'solanthanhtoan.required'    	=> 'Số lần thanh toán không được phép để trống',
			'thoihanthanhtoan.required'    	=> 'Thời hạn thanh toán không được phép để trống',
			'thoihanhopdong.required'       => 'Thời hạn hợp đồng không được phép để trống',
        ];
}
