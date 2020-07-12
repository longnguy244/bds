@extends('admin.layouts.base')

@push('css')

    <style>
        .select2-container--default .select2-selection--single{
            border: none !important;
            border-bottom: 1px solid #80808066  !important;
            height: 36px !important;
        }
    </style>

@endpush



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
                
                <div class= "col-md-6">
                    <label for="bds">
                        Bất động sản
                    </label>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <select class="form-control select2" name="id_bds" id= "bds">
                                <option value="">-- Please select --</option>
                                @foreach($bds as $bds)
                                <option value="{{ $bds->id }}">{{ $bds->ten_bds }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <a  target="_blank" type="button" class="btn bg-green waves-effect" href="{{ route('bds.create') }}">
                                <i class="material-icons">add</i>
                            </a>
                        </div>
                        <input name="id_bds" type="text" id="id_bds" class="form-control hidden" placeholder="id" value="{{ old('id_bds') }}">
                    </div>
                    <label for="customer">
                        Khách hàng
                    </label>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <select class="form-control select2" name="id_kh" id = "customer">
                                <option value="">-- Please select --</option>
                                @foreach($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->ten_kh }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <a  target="_blank" type="button" class="btn bg-green waves-effect" href="{{ route('customer.create') }}">
                                <i class="material-icons">add</i>
                            </a>
                        </div>
                    </div>
                    <label for="staff">
                        Nhân viên
                    </label>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <select class="form-control select2" name="id_nv"  id = "staff">
                                <option value="">-- Please select --</option>
                                @foreach($nhanvien as $nhanvien)
                                <option value="{{ $nhanvien->id }}">{{ $nhanvien->ten_nv }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <a type="button" class="btn bg-green waves-effect" href="{{ route('staff.create') }}">
                                <i class="material-icons">add</i>
                            </a>
                        </div>
                        <input name="id_nv" type="text" id="id_nv" class="form-control hidden" placeholder="Nhân viên" value="{{ old('id_nv') }}">
                    </div>
                    <label for="httt">
                        Hình thức thanh toán
                    </label>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <select class="form-control select2" name="id_httt"  id = "httt">
                                <option value="">-- Please select --</option>
                                @foreach($hinhthucthanhtoan as $hinhthucthanhtoan)
                                <option value="{{ $hinhthucthanhtoan->id }}">{{ $hinhthucthanhtoan->ten_httt }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <a  target="_blank" type="button" class="btn bg-green waves-effect" href="{{ route('get.hinhthucthanhtoan.create') }}">
                                <i class="material-icons">add</i>
                            </a>
                        </div>
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
                        Giá
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="giaban" type="text" id="giaban" class="form-control" placeholder="Giá bán" value="{{ old('giaban') }}">
                        </div>
                    </div>
                    <label for="giathue">
                        Giá tiền bằng chữ
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="giathue" type="text" id="giathue" class="form-control" placeholder="Giá tiền bằng chữ" value="{{ old('giathue') }}">
                        </div>
                    </div>
                    
                </div>
                <div class= "col-md-6">
                    <label for="phi_mg">
                        Phí môi giới
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="phi_mg" type="text" id="phi_mg" class="form-control" placeholder="Phí môi giới" value="{{ old('phi_mg') }}">
                        </div>
                    </div>
                    <label for="phi_dangbai">
                        Phí môi giới bằng chữ
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="phi_dangbai" type="text" id="phi_dangbai" class="form-control" placeholder="Phí đăng bài" value="{{ old('phi_dangbai') }}">
                        </div>
                    </div>
                    <label for="huehong">
                        Số lần thanh toán
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="huehong" type="text" id="huehong" class="form-control" placeholder="Huê hồng" value="{{ old('huehong') }}">
                        </div>
                    </div>
                    <b>Thời hạn hợp đồng</b>
                    <div class="input-group">
                        <div class="form-line">
                            <input data-inputmask-alias="yyyy/mm/dd" name="thoihanhopdong" type="text" id="thoihanhopdong" class="form-control date" data-val="true" data-val-required="Required" placeholder="Ex: 30/07/2016" value="{{ old('thoihanhopdong') }}">
                        </div>
                    </div>
                    <b>Ngày lập hợp đồng</b>
                    <div class="input-group">
                        <div class="form-line">
                            <input data-inputmask-alias="yyyy/mm/dd" name="ngaylaphd" type="text" id="ngaylaphd" class="form-control date" data-val="true" data-val-required="Required" placeholder="Ex: 30/07/2016" value="{{ date('Y/m/d') }}">
                        </div>
                    </div>
                    <b>Tình trạng hợp đồng</b>
                    <div class="input-group">
                        <select class="btn-group bootstrap-select form-control show-tick" name="status"  id="status">
                            <option value="">-- Please select --</option>
                            <option value="0">Hợp đồng môi giới</option>
                            <option value="1">Hợp đồng đặt cọc</option>
                            <option value="2">Hợp đồng mua bán</option>
                        </select>
                    </div>
                    <label for="bds_note">
                        Ghi chú
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="ghichu" id="bds_note" rows="5" class="form-control no-resize" placeholder="Ghi chú">
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
                </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@push('js')
    <script>
        $("selectpicker").selectpicker();
        $("#customer").change(function (e) {
            $("#id_nv").val($('#customer').val());
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

    <script type="text/javascript">
        $('.select2').select2();
    </script>
@endpush