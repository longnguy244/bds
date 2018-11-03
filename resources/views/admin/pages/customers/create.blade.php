@extends('admin.layouts.base')

@section('title')
    Thêm Khách Hàng - DreamHouse
@endsection

@section('main')

@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<div class="card">
    <div class="header">
        <h2>
            THÊM THÔNG TIN KHÁCH HÀNG
        </h2>
    </div>
    <form name="formCustomer" method="POST" action="{{ route('customer.store') }}">
	{{ method_field('POST') }}
    {{ csrf_field() }}
        <div class="body">
            <div class="row clearfix">
                <div class= "col-md-12">
                    <button type="submit" class="btn bg-brown btn-lg waves-effect">
                        Lưu
                    </button>
                    <a type="button" class="btn bg-grey btn-lg waves-effect" href="{{ URL::previous() }}">
                        Quay Lại
                    </a>
                </div>
                <div class= "col-md-6">
                    <label for="customer_name">
                        Họ và tên
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="ten_nv" type="text" id="customer_name" class="form-control" placeholder="Họ và tên" value="{{ old('ten_nv') }}">
                            <input name="id_cvu" type="hidden" value="6">
                        </div>
                    </div>
                    <b>Ngày sinh</b>
                    <div class="input-group">
                        <div class="form-line">
                            <input data-inputmask-alias="yyyy/mm/dd" name="ngaysinh_nv" type="text" id="customer_birth" class="form-control date" data-inputmask="'yearrange': { 'minyear': '1900', 'maxyear': '2018' }" data-val="true" data-val-required="Required" placeholder="Ex: 2016/07/30" value="{{ old('ngaysinh_nv') }}">
                        </div>
                    </div>
                    <label for="customer_address">
                        Địa chỉ
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="diachi_nv" type="text" id="customer_address" class="form-control" placeholder="Địa chỉ" value="{{ old('diachi_nv') }}">
                        </div>
                    </div>
                    <label for="customer_phone">
                        Số điện thoại
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{10,11}" name="phone_nv" type="text" id="customer_phone" class="form-control" placeholder="Số điện thoại" value="{{ old('phone_nv') }}">
                        </div>
                    </div>
                    <label for="customer_email">
                        Email
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-alias="email" name="email_nv" type="text" id="customer_email" class="form-control" data-val="true" data-val-required="Required" placeholder="Email" value="{{ old('email_nv') }}">
                        </div>
                    </div>
                </div>
                <div class= "col-md-6">
                    <label for="customer_household">
                        Hộ khẩu
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="hokhau" type="text" id="customer_household" class="form-control" placeholder="Hộ khẩu" value="{{ old('hokhau') }}">
                        </div>
                    </div>
                    <label for="customer_identity">
                        Chứng minh thư
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{12,15}" name="cmnd_nv" type="text" id="customer_identity" class="form-control" placeholder="Chứng minh thư" value="{{ old('cmnd_nv') }}">
                        </div>
                    </div>
                    <b>Ngày cấp</b>
                    <div class="input-group">
                        <div class="form-line">
                            <input data-inputmask-alias="yyyy/mm/dd" name="ngaycap_nv" type="text" id="customer_dayRange" data-inputmask="'yearrange': { 'minyear': '1900', 'maxyear': '2018' }" class="form-control date" placeholder="Ex: 2016/07/30" value="{{ old('ngaycap_nv') }}">
                        </div>
                    </div>
                    <label for="customer_note">
                        Ghi chú
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="ghichu" id="customer_note" rows="5" class="form-control no-resize" placeholder="Ghi chú" value="{{ old('ghichu') }}">
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@push('js')
    <script>
        // $('#customer_birth').inputmask('9999/99/99',{alias: "mm/dd/yyyy"});
        // $('#customer_dayRange').inputmask('9999/99/99');
        $(document).ready(function() {
            $(":input[data-inputmask-mask]").inputmask();
            $(":input[data-inputmask-alias]").inputmask();
            $(":input[data-inputmask-regex]").inputmask("Regex");
        });
    </script>
@endpush