@extends('admin.layouts.base')

@section('title')
    Thêm Hình thức thanh toán - DreamHouse
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
            THÊM HÌNH THỨC THANH TOÁN
        </h2>
    </div>
    <form name="forLoaibds" method="POST" action="">
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
                    <label for="loaibds_name">
                        Tên hình thức thanh toán
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="ten_httt" type="text" id="loaibds_name" class="form-control" placeholder="Tên hình thức thanh toán" value="{{ old('ten_httt') }}">
                        </div>
                    </div>
                    <label for="loaibds_note">
                        Ghi chú
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="ghichu" id="loaibds_note" rows="5" class="form-control no-resize" placeholder="Ghi chú" value="{{ old('ghichu') }}">
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection