<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KHACHHANG extends Model
{
	public $route = 'khachhang';
	protected $table = 'nhanvien';
    protected $fillable = 
    [
        'id_cvu',
        'ten_nv',
        'ngaysinh_nv',
        'diachi_nv',
        'phone_nv',
        'email_nv',
        'cmnd_nv',
        'ngaycap_nv',
        'ghichu',
        'hokhau',
    ];
    
    public  $rules =
    [
        'id_cvu'        => 'required',
        'ten_nv'        => 'required',
        'ngaysinh_nv'   => '',
        'diachi_nv'     => 'required',
        'phone_nv'      => 'required,phone_nv|max:11',
        'email_nv'      => '',
        'cmnd_nv'       => 'required|unique:nhanvien,cmnd_nv',
        'ngaycap_nv'    => 'required',
        'ghichu'        => '',
    ];

    public $messages = 
    [
        'id_cvu.required'       => 'Chọn chức vụ',
        'ten_nv.required'       => 'Tên nhân viên không được phép để trống',
        'diachi_nv.required'    => 'Địa chỉ nhân viên không được phép để trống',
        'phone_nv.required'     => 'Điện thoại nhân viên không được phép để trống',
        'cmnd_nv.required'      => 'CMND nhân viên không được phép để trống',
        'ngaycap_nv.required'   => 'Ngày cấp nhân viên không được phép để trống',
        'phone_nv.max'          => 'Điện thoại nhân viên không được vượt quá :max ký tự',
        'cmnd_nv.unique'        => 'CMND nhân viên là duy nhất',
    ];
}
