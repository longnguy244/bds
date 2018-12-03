@extends('admin.layouts.base')

@section('title')
    Sửa Phản Hồi - DreamHouse
@endsection

@push('css')
    <style type="text/css">

        [type="radio"]:not(:checked), [type="radio"]:checked {
            position: inherit;
            left: -9999px;
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
            SỬA PHẢN HỒI
        </h2>
    </div>
    <form name="formBds" method="POST" action="">
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
                        Tên
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="ten" type="text" id="ten" class="form-control" placeholder="Tên" value="{{ $data->ten }}">
                        </div>
                    </div>
                    <label for="lydothanhly">
                        Email
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="email" type="text" id="sdt" class="form-control" placeholder="Email" value="{{ $data->email }}">
                        </div>
                    </div>
                    <label for="lydothanhly">
                        Số điện thoại
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="sdt" type="text" id="sdt" class="form-control" placeholder="Số điện thoại" value="{{ $data->sdt }}">
                        </div>
                    </div>
                    <label for="lydothanhly">
                        Tiêu đề
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="tieude" type="text" id="tieude" class="form-control" placeholder="Tiêu dề phản hồi" value="{{ $data->tieude }}"
                        </div>
                    </div>
                    <label for="bds_note">
                        Nội dung phản hồi
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="noidung" id="bds_note" rows="5" class="form-control no-resize" placeholder="Nội dung" >
                                {{ $data->noidung }}
                            </textarea>
                        </div>
                    </div>
                    <label for="bds_note">
                        Trang thái
                    </label>
                    <div class="form-group">
                        <input type="radio" class="form-float" name="duyet" @if($data->duyet==0) checked @endif value="0"> Ẩn<br>
                        <input type="radio" class="form-float" name="duyet" @if($data->duyet==1) checked @endif value="1"> Duyệt
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
            $("#hopdong").selectpicker("val", "{{ $data->id_hd }}");
        });
    </script>
@endpush