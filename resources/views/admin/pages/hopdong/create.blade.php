@extends('admin.layouts.base')

@section('title')
    Thêm Hợp Đồng - DreamHouse
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
            THÊM HỢP ĐỒNG
        </h2>
    </div>
    <form name="formBds" method="POST" action="{{ route('hopdong.store') }}">
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
                    <label for="bds">
                        Bất động sản
                    </label>
                    <div class="form-group">
                        <select class="selectpicker" id = "bds">
                            <option value="">-- Please select --</option>
                            @foreach($bds as $bds)
                            <option value="{{ $bds->id }}">{{ $bds->ten_bds }}</option>
                            @endforeach
                        </select>
                        <a type="button" class="btn bg-green waves-effect" href="{{ route('bds.create') }}">
                            <i class="material-icons">add</i>
                        </a>
                        <input name="id_bds" type="text" id="id_bds" class="form-control hidden" placeholder="id" value="{{ old('id_bds') }}">
                    </div>
                    <label for="customer">
                        Khách hàng
                    </label>
                    <div class="form-group">
                        <select class="selectpicker" id = "customer">
                            <option value="">-- Please select --</option>
                            @foreach($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->ten_kh }}</option>
                            @endforeach
                        </select>
                        <a type="button" class="btn bg-green waves-effect" href="{{ route('customer.create') }}">
                            <i class="material-icons">add</i>
                        </a>
                        <input name="id_kh" type="text" id="id_kh" class="form-control hidden" placeholder="id" value="{{ old('id_kh') }}">
                    </div>
                    <label for="staff">
                        Nhân viên
                    </label>
                    <div class="form-group">
                        <select class="selectpicker" id = "staff">
                            <option value="">-- Please select --</option>
                            @foreach($nhanvien as $nhanvien)
                            <option value="{{ $nhanvien->id }}">{{ $nhanvien->ten_nv }}</option>
                            @endforeach
                        </select>
                        <a type="button" class="btn bg-green waves-effect" href="{{ route('staff.create') }}">
                            <i class="material-icons">add</i>
                        </a>
                        <input name="id_nv" type="text" id="id_nv" class="form-control hidden" placeholder="Nhân viên" value="{{ old('id_nv') }}">
                    </div>
                    <label for="ten_hd">
                        Tên hợp đồng
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="ten_hd" type="text" id="ten_hd" class="form-control" placeholder="Tên hợp đồng" value="{{ old('ten_hd') }}">
                        </div>
                    </div>
                    <label for="giaban">
                        Giá bán
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="giaban" type="text" id="giaban" class="form-control" placeholder="Giá bán" value="{{ old('giaban') }}">
                        </div>
                    </div>
                    <label for="giathue">
                        Giá thuê
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="giathue" type="text" id="giathue" class="form-control" placeholder="Giá thuê" value="{{ old('giathue') }}">
                        </div>
                    </div>
                    <label for="phi_mg">
                        Phí môi giới
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="phi_mg" type="text" id="phi_mg" class="form-control" placeholder="Phí môi giới" value="{{ old('phi_mg') }}">
                        </div>
                    </div>
                    <label for="phi_dangbai">
                        Phí đăng bài
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="phi_dangbai" type="text" id="phi_dangbai" class="form-control" placeholder="Phí đăng bài" value="{{ old('phi_dangbai') }}">
                        </div>
                    </div>
                </div>
                <div class= "col-md-6">
                    <label for="huehong">
                        Huê hồng
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="huehong" type="text" id="huehong" class="form-control" placeholder="Huê hồng" value="{{ old('huehong') }}">
                        </div>
                    </div>
                    <label for="hinhthucthanhtoan">
                        Hình thức thanh toán
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="hinhthucthanhtoan" type="text" id="hinhthucthanhtoan" class="form-control" placeholder="Hình thức thanh toán" value="{{ old('hinhthucthanhtoan') }}">
                        </div>
                    </div>
                    <label for="solanthanhtoan">
                        Số lần thanh toán
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="solanthanhtoan" type="text" id="solanthanhtoan" class="form-control" placeholder="Số lần thanh toán" value="{{ old('solanthanhtoan') }}">
                        </div>
                    </div>
                    <label for="thoihanthanhtoan">
                        Thời hạn thanh toán
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="thoihanthanhtoan" type="text" id="thoihanthanhtoan" class="form-control" placeholder="Thời hạn thanh toán" value="{{ old('thoihanthanhtoan') }}">
                        </div>
                    </div>
                    <b>Thời hạn hợp đồng</b>
                    <div class="input-group">
                        <div class="form-line">
                            <input data-inputmask-alias="yyyy/mm/dd" name="thoihanhopdong" type="text" id="thoihanhopdong" class="form-control date" data-val="true" data-val-required="Required" placeholder="Ex: 2016/07/30" value="{{ old('thoihanhopdong') }}">
                        </div>
                    </div>
                    <b>Ngày lập hợp đồng</b>
                    <div class="input-group">
                        <div class="form-line">
                            <input data-inputmask-alias="yyyy/mm/dd" name="ngaylaphd" type="text" id="ngaylaphd" class="form-control date" data-val="true" data-val-required="Required" placeholder="Ex: 2016/07/30" value="{{ old('ngaylaphd') }}">
                        </div>
                    </div>
                    <label for="bds_note">
                        Ghi chú
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="ghichu" id="bds_note" rows="5" class="form-control no-resize" placeholder="Ghi chú" value="{{ old('ghichu') }}">
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
        $("#bds").change(function (e) {
            $("#id_bds").val($('#bds').val());
        });
        $("#staff").change(function (e) {
            $("#id_nv").val($('#staff').val());
        });
        $(document).ready(function() {
            $(":input[data-inputmask-mask]").inputmask();
            $(":input[data-inputmask-alias]").inputmask();
            $(":input[data-inputmask-regex]").inputmask("Regex");
        });
    </script>
@endpush