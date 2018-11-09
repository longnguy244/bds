@extends('admin.layouts.base')

@section('title')
    Thêm Phản hồi - DreamHouse
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
            THÊM PHẢN HỒI
        </h2>
    </div>
    <form name="formBds" method="POST" action="{{ route('phanhoi.store') }}">
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
                    <label for="hopdong">
                        Email người dùng
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="email" type="text" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <label for="lydothanhly">
                        Lý do thanh lý
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="lydothanhly" type="text" id="lydothanhly" class="form-control" placeholder="Lý do thanh lý" value="{{ old('lydothanhly') }}">
                        </div>
                    </div>
                    <b>Ngày lập biên bản</b>
                    <div class="input-group">
                        <div class="form-line">
                            <input data-inputmask-alias="yyyy/mm/dd" name="ngaylapbb" type="text" id="ngaylapbb" class="form-control date" data-val="true" data-val-required="Required" placeholder="Ex: 2016/07/30" value="{{ old('ngaylapbb') }}">
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
        $("#hopdong").change(function (e) {
            $("#id_hd").val($('#hopdong').val());
        });
        $(document).ready(function() {
            $(":input[data-inputmask-mask]").inputmask();
            $(":input[data-inputmask-alias]").inputmask();
            $(":input[data-inputmask-regex]").inputmask("Regex");
        });
    </script>
@endpush