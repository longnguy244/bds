@extends('admin.layouts.base')

@section('title')
    Sửa Nhân Viên - DreamHouse
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
            SỬA THÔNG TIN NHÂN VIÊN
        </h2>
    </div>
    <form name="formStaff" method="POST" action="{{ route('staff.update', ['data' => $data->id]) }}">
	{{ method_field('PUT') }}
    {{ csrf_field() }}
        <div class="body">
            <div class="row clearfix">
                <div class= "col-md-12">
                    <button type="submit" class="btn bg-brown btn-lg waves-effect">
                        Lưu
                    </button>
                    <a type="button" class="btn bg-grey btn-lg waves-effect" href="{{ asset('admin/staff') }}">
                        Quay Lại
                    </a>
                </div>
                <div class= "col-md-6">
                    <label for="staff_position">
                        Chức vụ
                    </label>
                    <div class="form-group">
                        <select class="selectpicker" id = "staff_position">
                            <option value="">-- Please select --</option>
                            @foreach($positions as $position)
                            <option value="{{ $position->id }}">{{ $position->ten_cvu }}</option>
                            @endforeach
                        </select>
                        <a type="button" class="btn bg-green waves-effect" href="{{ route('position.create') }}">
                            <i class="material-icons">add</i>
                        </a>
                        <input name="id_cvu" type="text" id="id_cvu" class="form-control hidden" placeholder="id" value="{{ old('id_cvu', $data->id_cvu) }}">
                    </div>
                    <label for="staff_name">
                        Họ và tên
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="ten_nv" type="text" id="staff_name" class="form-control" placeholder="Họ và tên" value="{{ old('ten_nv', $data->ten_nv) }}">
                        </div>
                    </div>
                    <b>Ngày sinh</b>
                    <div class="input-group">
                        <div class="form-line">
                        <input data-inputmask-alias="yyyy/mm/dd" name="ngaysinh_nv" type="text" id="staff_birth" class="form-control date" data-inputmask="'yearrange': { 'minyear': '1900', 'maxyear': '2018' }" data-val="true" data-val-required="Required" placeholder="Ex: 2016/07/30" value="{{ old('ngaysinh_nv', $data->ngaysinh_nv) }}">
                        </div>
                    </div>
                    <label for="staff_address">
                        Địa chỉ
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="diachi_nv" type="text" id="staff_address" class="form-control" placeholder="Địa chỉ" value="{{ old('diachi_nv', $data->diachi_nv) }}">
                        </div>
                    </div>
                    <label for="staff_phone">
                        Số điện thoại
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{10,11}" name="phone_nv" type="text" id="staff_phone" class="form-control" placeholder="Số điện thoại" value="{{ old('phone_nv', $data->phone_nv) }}">
                        </div>
                    </div>
                </div>
                <div class= "col-md-6">
                    <label for="staff_email">
                        Email
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-alias="email" name="email_nv" type="text" id="staff_email" class="form-control" placeholder="Email" value="{{ old('email_nv', $data->email_nv) }}">
                        </div>
                    </div>
                    <label for="staff_identity">
                        Chứng minh thư
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{12,15}" name="cmnd_nv" type="text" id="staff_identity" class="form-control" placeholder="Chứng minh thư" value="{{ old('cmnd_nv', $data->cmnd_nv) }}">
                        </div>
                    </div>
                    <b>Ngày cấp</b>
                    <div class="input-group">
                        <div class="form-line">
                            <input data-inputmask-alias="yyyy/mm/dd" name="ngaycap_nv" type="text" id="staff_dayRange" data-inputmask="'yearrange': { 'minyear': '1900', 'maxyear': '2018' }" class="form-control date" placeholder="Ex: 2016/07/30" value="{{ old('ngaycap_nv', $data->ngaycap_nv) }}">
                        </div>
                    </div>
                    <label for="staff_note">
                        Ghi chú
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="ghichu" id="staff_note" rows="5" class="form-control no-resize" placeholder="Ghi chú" value="{{ old('ghichu', $data->ghichu) }}">
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
        $(".selectpicker").selectpicker();
        $("#staff_position").change(function (e) {
            $("#id_cvu").val($('#staff_position').val());
        });
        $(document).ready(function() {
            $(":input[data-inputmask-mask]").inputmask();
            $(":input[data-inputmask-alias]").inputmask();
            $(":input[data-inputmask-regex]").inputmask("Regex");
            $("#staff_position").selectpicker("val", "{{ $data->id_cvu }}");
        });
    </script>
@endpush