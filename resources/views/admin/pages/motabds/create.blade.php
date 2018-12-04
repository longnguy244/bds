@extends('admin.layouts.base')

@section('title')
    Thêm Mô Tả Bất Động Sản - DreamHouse
@endsection

@push('css')
    <style type="text/css">
        [type="checkbox"]:not(:checked), [type="checkbox"]:checked {
            position: inherit;
            opacity: 1;
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
            THÊM MÔ TẢ CHO BẤT ĐỘNG SẢN <span style="color: red">{{ $data->ten_bds }}</span>
        </h2>
    </div>
    <form name="formBds" method="POST" action="{{ route('motabds.store') }}">
	{{ method_field('POST') }}
    {{ csrf_field() }}
        <div class="body">
            <div class="row clearfix">
                <div class="col-md-12">
                    <h3>
                        Tiện nghi
                    </h3>
                </div>
                <div class= "col-md-6">
                    <label for="bds">
                        Bất Động Sản
                    </label>
                    <div class="form-group">
                        <input type="text" class="form-control" readonly="" value="{{ $data->ten_bds }}">
                        <input name="id_bds" type="hidden" id="id_bds" class="form-control" placeholder="id" value="{{ $data->id }}">
                    </div>
                    <label for="dientich">
                        Diện tích
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="dientich" type="text" id="dientich" class="form-control" placeholder="Diện tích" value="{{ old('dientich') }}">
                        </div>
                    </div>
                    <label for="chieudai">
                        Chiều dài
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="chieudai" type="text" id="chieudai" class="form-control" placeholder="Chiều dài" value="{{ old('chieudai') }}">
                        </div>
                    </div>
                    <label for="bds_owner">
                        Chiều rộng
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="chieurong" type="text" id="chieurong" class="form-control" placeholder="Chiều rộng" value="{{ old('chieurong') }}">
                        </div>
                    </div>
                    <label for="dientichxd">
                        Diện tích xây dựng
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="dientichxd" type="text" id="dientichxd" class="form-control" placeholder="Diện tích xây dựng" value="{{ old('dientichxd') }}">
                        </div>
                    </div>
                    <label for="dientichsd">
                        Diện tích sử dụng
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="dientichsd" type="text" id="dientichsd" class="form-control" placeholder="Diện tích sử dụng" value="{{ old('dientichsd') }}">
                        </div>
                    </div>
                </div>
                <div class= "col-md-6">
                    <label for="phongngu">
                        Số phòng ngủ
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="phongngu" type="text" id="phongngu" class="form-control" placeholder="Số phòng ngủ" value="{{ old('phongngu') }}">
                        </div>
                    </div>
                    <label for="phongtam">
                        Số phòng tắm
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{1,}" name="phongtam" type="text" id="phongtam" class="form-control" placeholder="Số phòng tắm" value="{{ old('phongtam') }}">
                        </div>
                    </div>
                    <label for="cautruc">
                        Cấu trúc
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="cautruc" type="text" id="cautruc" class="form-control" placeholder="Cấu trúc" value="{{ old('cautruc') }}">
                        </div>
                    </div>
                    <label for="tiennghi">
                        Tiện nghi
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="tiennghi" type="text" id="tiennghi" class="form-control" placeholder="Tiện nghi" value="{{ old('tiennghi') }}">
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
                <div class="col-md-12">
                    <h3>Tiêu chí</h3>
                    <table width="60%">
                        @foreach ($tieuchi as $key => $val)
                            <tr>
                                <td>
                                   <input type="checkbox" name="tieuchi[]" class="form-control" value="{{ $val->id }}">
                                </td>
                                <td>
                                     {{ $val->tentieuchi }}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class= "col-md-12 m-t-30">
                    <center>
                        <button type="submit" class="btn bg-brown btn-lg waves-effect">
                            Lưu
                        </button>
                        <a type="button" class="btn bg-grey btn-lg waves-effect" href="{{ URL::previous() }}">
                            Quay Lại
                        </a>
                    </center>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@push('js')
    <script>
        $(".selectpicker").selectpicker();
        $("#bds").change(function (e) {
            $("#id_bds").val($('#bds').val());
        });
        $(document).ready(function() {
            $(":input[data-inputmask-mask]").inputmask();
            $(":input[data-inputmask-alias]").inputmask();
            $(":input[data-inputmask-regex]").inputmask("Regex");
        });
    </script>
@endpush