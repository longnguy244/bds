@extends('admin.layouts.base')

@section('title')
    Sửa Bất Động Sản - DreamHouse
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
            SỬA BẤT ĐỘNG SẢN
        </h2>
    </div>
    <form name="formBds" method="POST" action="{{ route('bds.update', ['data' => $data->id]) }}">
	{{ method_field('PUT') }}
    {{ csrf_field() }}
        <div class="body">
            <div class="row clearfix">
                <div class= "col-md-12">
                    <button type="submit" class="btn bg-brown btn-lg waves-effect">
                        Lưu
                    </button>
                    <a type="button" class="btn bg-grey btn-lg waves-effect" href="{{ asset('admin/bds') }}">
                        Quay Lại
                    </a>
                </div>
                <div class= "col-md-6">
                    <label for="customer">
                        Khách hàng
                    </label>
                    <div class="form-group">
                        <input type="text" class="form-control" readonly="" style="width: 47%; float: left" name="" value="{{ TenCSH($data->id_csh) }}">
                        <a type="button" class="btn bg-green waves-effect" href="{{ route('get.edit.chusohuu',$data->id_csh) }}">
                            Xem
                        </a>
                        <input name="id_csh" type="text" id="id_kh" class="form-control hidden" placeholder="id" value="{{ old('id_csh', $data->id_csh) }}">
                    </div>
                    <label for="loaibds">
                        Loại bất động sản
                    </label>
                    <div class="form-group">
                        <select class="selectpicker" id = "loaibds">
                            <option value="">-- Please select --</option>
                            @foreach($loaibds as $loaibds)
                            <option value="{{ $loaibds->id }}">{{ $loaibds->ten_loaibds }}</option>
                            @endforeach
                        </select>
                        <a type="button" class="btn bg-green waves-effect" href="{{ route('loaibds.create') }}">
                            <i class="material-icons">add</i>
                        </a>
                        <input name="id_loaibds" type="text" id="id_loaibds" class="form-control hidden" placeholder="id" value="{{ old('id_loaibds', $data->id_loaibds) }}">
                    </div>
                    <label for="city">
                        Thành phố
                    </label>
                    <div class="form-group">
                        <select class="selectpicker" id = "city">
                            <option value="">-- Please select --</option>
                            @foreach($city as $city)
                            <option value="{{ $city->id }}">{{ $city->ten_tp }}</option>
                            @endforeach
                        </select>
                        <a type="button" class="btn bg-green waves-effect" href="{{ route('city.create') }}">
                            <i class="material-icons">add</i>
                        </a>
                        <input name="id_tp" type="text" id="id_tp" class="form-control hidden" placeholder="id" value="{{ old('id_tp', $data->id_tp) }}">
                    </div>
                    <label for="ten_bds">
                        Tên bất động sản
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="ten_bds" type="text" id="ten_bds" class="form-control" placeholder="Tên bất động sản" value="{{ old('ten_bds', $data->ten_bds) }}">
                        </div>
                    </div>
                    <label for="alias">
                        Alias
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="alias" type="text" id="alias" class="form-control" placeholder="Alias" value="{{ old('alias', $data->alias) }}">
                        </div>
                    </div>
                </div>
                <div class= "col-md-6">
                    <label for="bds_address">
                        Địa chỉ
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="diachi_bds" type="text" id="diachi_bds" class="form-control" placeholder="Địa chỉ" value="{{ old('diachi_bds', $data->diachi_bds) }}">
                        </div>
                    </div>
                    <label for="bds_num">
                        Số CNQSDĐ
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="soCNQSDD" type="text" id="soCNQSDD" class="form-control" placeholder="Chủ sở hữu" value="{{ old('soCNQSDD', $data->soCNQSDD) }}">
                        </div>
                    </div>
                    <label for="bds_note">
                        Tọa độ
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="toado" id="toado" rows="5" class="form-control no-resize" placeholder="Tọa độ">{{ old('toado', $data->toado) }}
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="bds_note">
                    Ghi chú
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="ghichu" id="ghichu" rows="5" class="form-control no-resize" placeholder="Ghi chú">{{ old('ghichu', $data->ghichu) }}
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
        $("#customer").change(function (e) {
            $("#id_kh").val($('#customer').val());
        });
        $("#loaibds").change(function (e) {
            $("#id_loaibds").val($('#loaibds').val());
        });
        $("#city").change(function (e) {
            $("#id_tp").val($('#city').val());
        });
        $(document).ready(function() {
            $(":input[data-inputmask-mask]").inputmask();
            $(":input[data-inputmask-alias]").inputmask();
            $(":input[data-inputmask-regex]").inputmask("Regex");
            $("#customer").selectpicker("val", "{{ $data->id_kh }}");
            $("#loaibds").selectpicker("val", "{{ $data->id_loaibds }}");
            $("#city").selectpicker("val", "{{ $data->id_tp }}");
        });
    </script>
@endpush