@extends('admin.layouts.base')

@section('title')
    Thêm Bài Viết - DreamHouse
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
            THÊM BÀI VIẾT
        </h2>
    </div>
    <form name="formBaiViet" method="POST" action="{{ route('baiviet.store') }}">
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
                        Bất Động Sản
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
                    <label for="baiviet_name">
                        Tên bài viết
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="ten_bv" type="text" id="ten_bv" class="form-control" placeholder="Tên bài viết" value="{{ old('ten_bv') }}">
                        </div>
                    </div>
                    <label for="alias">
                        Alias
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="alias" type="text" id="alias" class="form-control" placeholder="Alias" value="{{ old('alias') }}">
                        </div>
                    </div>
                    <label for="bds_owner">
                        Nội dung
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="noidung" id="noidung">
                                {!! old('noidung') !!}
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class= "col-md-6">
                    <label for="trangthai">
                        Trạng thái
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="trangthai" type="text" id="trangthai" class="form-control" placeholder="Trạng thái" value="{{ old('trangthai') }}">
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
        $("#bds").change(function (e) {
            $("#id_bds").val($('#bds').val());
        });
        $(document).ready(function() {
            $(":input[data-inputmask-mask]").inputmask();
            $(":input[data-inputmask-alias]").inputmask();
            $(":input[data-inputmask-regex]").inputmask("Regex");
        });
        CKEDITOR.replace( 'noidung' );
    </script>
@endpush