@extends('admin.layouts.base')

@section('title')
    Sửa Hóa Đơn - DreamHouse
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
            SỬA HÓA ĐƠN
        </h2>
    </div>
    <form name="formBds" method="POST" action="{{ route('post.hoadon.edit', ['data' => $data->id]) }}">
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
                     <a type="button" class="btn waves-effect" style="background-color: blue; color: white; padding: 7px 20px; font-size: 15px;" href="{{ route('print.hoadon',$data->id) }}">
                        <i class="fas fa-save"></i>  In
                    </a>
                </div>
                <div class= "col-md-6">
                    <label for="hopdong">
                        Hợp đồng
                    </label>
                    <div class="form-group">
                        <select class="selectpicker" id = "hopdong">
                            <option value="">-- Please select --</option>
                            @foreach($hopdong as $hopdong)
                            <option value="{{ $hopdong->id }}">{{ $hopdong->ten_hd }}</option>
                            @endforeach
                        </select>
                        <a type="button" class="btn bg-green waves-effect" href="{{ route('hopdong.create') }}">
                            <i class="material-icons">add</i>
                        </a>
                        <input name="id_hd" type="text" id="id_hd" class="form-control hidden" placeholder="id" value="{{ old('id_hd', $data->id_hd) }}">
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
                        <input name="id_nv" type="text" id="id_nv" class="form-control hidden" placeholder="Nhân viên" value="{{ old('id_nv', $data->id_nv) }}">
                    </div>
                    <label for="nguoinoptien">
                        Người nộp tiền
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="nguoinoptien" type="text" id="nguoinoptien" class="form-control" placeholder="Tên người nộp" value="{{ $data->nguoinoptien or old('nguoinoptien') }}">
                        </div>
                    </div>
                    <label for="lydothu">
                        Số CMND
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="CMND" type="text" id="CMND" class="form-control" placeholder="Số chứng minh nhân dân" value="{{ old('CMND', $data->CMND) }}">
                        </div>
                    </div>
                    
                </div>
                <div class= "col-md-6">
                    <label for="lydothu">
                        Lý do thu
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="lydothu" type="text" id="lydothu" class="form-control" placeholder="Lý do thu" value="{{ old('lydothu', $data->lydothu) }}">
                        </div>
                    </div>
                    <label for="tongtien">
                        Tổng tiền
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="tongtien" type="text" id="tongtien" class="form-control" placeholder="Tổng tiền" value="{{ old('tongtien', $data->tongtien) }}">
                        </div>
                    </div>
                    <label for="tongtienbangchu">
                        Tổng tiền bằng chữ
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="tongtienchu" type="text" id="tongtienchu" class="form-control" placeholder="Tổng tiền bằng chữ" value="{{ old('tongtienchu',$data->tongtienchu) }}">
                        </div>
                    </div>
                    <b>Ngày thu</b>
                    <div class="input-group">
                        <div class="form-line">
                            <input data-inputmask-alias="yyyy/mm/dd" name="ngaythu" type="text" id="ngaythu" class="form-control date" data-val="true" data-val-required="Required" placeholder="Ex: 2016/07/30" value="{{ old('ngaythu', $data->ngaythu) }}">
                        </div>
                    </div>
                    <label for="bds_note">
                        Ghi chú
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="ghichu" id="bds_note" rows="5" class="form-control no-resize" placeholder="Ghi chú" value="{{ old('ghichu', $data->ghichu) }}">
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
        $("#hopdong").change(function (e) {
            $("#id_hd").val($('#hopdong').val());
        });
        $("#staff").change(function (e) {
            $("#id_nv").val($('#staff').val());
        });
        $(document).ready(function() {
            $(":input[data-inputmask-mask]").inputmask();
            $(":input[data-inputmask-alias]").inputmask();
            $(":input[data-inputmask-regex]").inputmask("Regex");
            $("#hopdong").selectpicker("val", "{{ $data->id_hd }}");
            $("#staff").selectpicker("val", "{{ $data->id_nv }}");
        });
    </script>
@endpush