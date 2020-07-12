@extends('admin.layouts.base')

@section('title')
    Sửa Hợp Đồng - DreamHouse
@endsection

@push('css')

    <style>
        .select2-container--default .select2-selection--single{
            border: none !important;
            border-bottom: 1px solid #80808066  !important;
            height: 36px !important;
        }
    </style>

@endpush

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
            SỬA HỢP ĐỒNG
        </h2>
    </div>
    <form name="formBds" method="POST" action="{{ route('hopdong.update', ['data' => $data->id]) }}">
	{{ method_field('PUT') }}
    {{ csrf_field() }}
        <div class="body">
            <div class="row clearfix">
                
                <div class= "col-md-6">
                    <label for="bds">
                        Bất động sản
                    </label>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="text" id="id_bds" class="form-control" readonly="" placeholder="id" value="{{ TenBDS($data->id_bds) }}">
                        </div>
                        <div class="col-md-2">
                            <a  target="_blank" type="button" class="btn bg-green waves-effect" href="{{ route('bds.edit', ['data' => $data->id_bds]) }}">
                                Xem
                            </a>
                        </div>
                        <input name="id_bds" type="text" id="id_bds" class="form-control hidden" placeholder="id" value="{{ old('id_bds', $data->id_bds) }}">
                    </div>
                    <label for="customer">
                        Khách hàng
                    </label>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="text" class="form-control" readonly="" placeholder="id" value="{{ TenKhachHang($data->id_kh) }}">
                        </div>
                        <div class="col-md-2">
                            <a  target="_blank" type="button" class="btn bg-green waves-effect" href="{{ route('customer.edit',  ['data' => $data->id_kh]) }}">
                                Xem
                            </a>
                        </div>
                        <input name="id_kh" type="text" id="id_kh" class="form-control hidden" placeholder="id" value="{{ old('id_kh', $data->id_kh) }}">
                    </div>
                    <label for="staff">
                        Nhân viên
                    </label>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <select class="form-control select2" id = "staff">
                                <option value="">-- Please select --</option>
                                @foreach($nhanvien as $nhanvien)
                                <option @if($data->id_nv == $nhanvien->id) selected @endif value="{{ $nhanvien->id }}">{{ $nhanvien->ten_nv }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input name="id_nv" type="text" id="id_nv" class="form-control hidden" placeholder="Nhân viên" value="{{ old('id_nv', $data->id_nv) }}">
                    </div>
                    <label for="httt">
                        Hình thức thanh toán
                    </label>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <select class="form-control select2" name="id_httt"  id = "httt">
                                <option value="">-- Please select --</option>
                                @foreach($hinhthucthanhtoan as $hinhthucthanhtoan)
                                <option @if($data->id_httt == $hinhthucthanhtoan->id ) selected @endif value="{{ $hinhthucthanhtoan->id }}">{{ $hinhthucthanhtoan->ten_httt }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <a  target="_blank" type="button" class="btn bg-green waves-effect" href="{{ route('get.hinhthucthanhtoan.create') }}">
                                <i class="material-icons">add</i>
                            </a>
                        </div>
                        {{-- <input name="id_httt" type="text" id="id_httt" class="form-control hidden" placeholder="Hình thức thanh toán" value="{{ old('id_httt',$data->id_httt) }}"> --}}
                    </div>
                    <label for="ten_hd">
                        Tên hợp đồng
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="ten_hd" type="text" id="ten_hd" class="form-control" placeholder="Tên hợp đồng" value="{{ old('ten_hd', $data->ten_hd) }}">
                        </div>
                    </div>
                    <label for="giaban">
                        Giá
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="giaban" type="text" id="giaban" class="form-control" placeholder="Giá bán" value="{{ old('giaban', $data->giaban) }}">
                        </div>
                    </div>
                    <label for="giathue">
                        Giá tiền bằng chữ
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="giathue" type="text" id="giathue" class="form-control" placeholder="Giá tiền bằng chữ" value="{{ old('giathue', $data->giathue) }}">
                        </div>
                    </div>
                </div>
                <div class= "col-md-6">
                    <label for="phi_mg">
                        Phí môi giới
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="phi_mg" type="text" id="phi_mg" class="form-control" placeholder="Phí môi giới" value="{{ old('phi_mg', $data->phi_mg) }}">
                        </div>
                    </div>
                    <label for="phi_dangbai">
                        Phí đăng bài
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="phi_dangbai" type="text" id="phi_dangbai" class="form-control" placeholder="Phí đăng bài" value="{{ old('phi_dangbai', $data->phi_dangbai) }}">
                        </div>
                    </div>
                    <label for="huehong">
                        Huê hồng
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="huehong" type="text" id="huehong" class="form-control" placeholder="Huê hồng" value="{{ old('huehong', $data->huehong) }}">
                        </div>
                    </div>
                    <b>Thời hạn hợp đồng</b>
                    <div class="input-group">
                        <div class="form-line">
                            <input data-inputmask-alias="yyyy/mm/dd" name="thoihanhopdong" type="text" id="thoihanhopdong" class="form-control date" data-val="true" data-val-required="Required" placeholder="Ex: 2016/07/30" value="{{ old('thoihanhopdong', $data->thoihanhopdong) }}">
                        </div>
                    </div>
                    <b>Ngày lập hợp đồng</b>
                    <div class="input-group">
                        <div class="form-line">
                            <input data-inputmask-alias="yyyy/mm/dd" name="ngaylaphd" type="text" id="ngaylaphd" class="form-control date" data-val="true" data-val-required="Required" placeholder="Ex: 2016/07/30" value="{{ old('ngaylaphd', $data->ngaylaphd) }}">
                        </div>
                    </div>
                    <b>Tình trạng hợp đồng</b>
                    <div class="input-group">
                    <div class="btn-group bootstrap-select disabled form-control">
                        <select class="form-control" disabled="" tabindex="-98">
                            <option @if($data->status == 0 ) selected @endif value="{{ $data->status }}">Hợp đồng môi giới</option>
                            <option @if($data->status == 1 ) selected @endif value="{{ $data->status }}">Hợp đồng đặt cọc</option>
                            <option @if($data->status == 2 ) selected @endif value="{{ $data->status }}">Hợp đồng mua bán</option>
                        </select>
                    </div>
                        <!-- <select class="btn-group bootstrap-select disabled form-control" name="status"  id="status">
                            <option value="">-- Please select --</option>
                            <option @if($data->status == 0 ) selected @endif value="{{ $data->status }}">Hợp đồng môi giới</option>
                            <option @if($data->status == 1 ) selected @endif value="{{ $data->status }}">Hợp đồng đặt cọc</option>
                            <option @if($data->status == 2 ) selected @endif value="{{ $data->status }}">Hợp đồng mua bán</option>
                        </select> -->
                    </div>
                    <label for="ghichu">
                        Ghi chú
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="ghichu" id="ghichu" rows="5" class="form-control no-resize" placeholder="Ghi chú">{{ old('ghichu', $data->ghichu) }}
                            </textarea>
                        </div>
                    </div>
                    <div class= "col-md-12">
                    <button type="submit" class="btn bg-brown btn-lg waves-effect">
                        Lưu
                    </button>
                    <a type="button" class="btn bg-grey btn-lg waves-effect" href="{{ URL::previous() }}">
                        Quay Lại
                    </a>
                    <a type="button" class="btn waves-effect" style="background-color: blue; color: white; padding: 7px 20px; font-size: 15px;" href="{{ route('print.hopdong',$data->id) }}">
                        <i class="fas fa-save"></i>  In
                    </a>
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
            $("#customer").selectpicker("val", "{{ $data->id_kh }}");
            $("#bds").selectpicker("val", "{{ $data->id_bds }}");
            $("#staff").selectpicker("val", "{{ $data->id_nv }}");
        });
        $('.select2').select2();
    </script>
@endpush