<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KHACHHANG extends Authenticatable
{
    use Notifiable;
	public $route = 'khachhang';
    protected $table = 'khachhang';
    protected $guard = 'khachhang';
    protected $fillable = 
    [
        'ten_kh',
        'ngaysinh_kh',
        'diachi_kh',
        'phone_kh',
        'email_kh',
        'password',
        'cmnd_kh',
        'ngaycap_kh',
        'ghichu',
        'hokhau',
    ];
    
    public  $rules =
    [
        'ten_kh'        => 'required',
        'ngaysinh_kh'   => '',
        'diachi_kh'     => 'required',
        'phone_kh'      => 'required,phone_kh|max:10',
        'email_kh'      => '',
        'cmnd_kh'       => 'required|unique:nhanvien,cmnd_kh',
        'ngaycap_kh'    => 'required',
        'ghichu'        => '',
    ];

    public $messages = 
    [
        'ten_kh.required'       => 'Tên nhân viên không được phép để trống',
        'diachi_kh.required'    => 'Địa chỉ nhân viên không được phép để trống',
        'phone_kh.required'     => 'Điện thoại nhân viên không được phép để trống',
        'cmnd_kh.required'      => 'CMND nhân viên không được phép để trống',
        'ngaycap_kh.required'   => 'Ngày cấp nhân viên không được phép để trống',
        'phone_kh.max'          => 'Điện thoại nhân viên không được vượt quá :max ký tự',
        'cmnd_kh.unique'        => 'CMND nhân viên là duy nhất',
    ];

    public function messages()
    {
        return $this->hasMany(MESSAGE::class, user_id);
    }
}
