<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhachHangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'ten_kh'        => 'required',
        'ngaysinh_kh'   => '',
        'diachi_kh'     => 'required',
        'phone_kh'      => 'required|unique|max:20',
        'email_kh'      => '',
        'hokhau'        => 'required|unique',
        'cmnd_kh'       => 'required|unique',
        'ngaycap_kh'    => 'required',
        'ghichu'        => '',
        ];
    }

    public function messages()
    {
        return [
            'ten_kh.required'       => 'Tên khách hàng không được phép để trống',
            'diachi_kh.required'    => 'Địa chỉ khách hàng không được phép để trống',
            'phone_kh.required'     => 'Điện thoại khách hàng không được phép để trống',
            'hokhau.required'       => 'Hộ khẩu khách hàng không được phép để trống',
            'cmnd_kh.required'      => 'CMND khách hàng không được phép để trống',
            'ngaycap_kh.required'   => 'Ngày cấp khách hàng không được phép để trống',
            'phone_kh.unique'       => 'Điện thoại khách hàng là duy nhất',
            'phone_kh.max'          => 'Điện thoại khách hàng không được vượt quá :max ký tự',
            'hokhau.unique'         => 'Hộ khẩu khách hàng là duy nhất',
            'cmnd_kh.unique'        => 'CMND khách hàng là duy nhất',
        ];
    }
}
