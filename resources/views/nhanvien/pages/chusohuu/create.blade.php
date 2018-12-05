@extends('admin.layouts.base')

@section('title')
    Thêm chủ sở hữu - DreamHouse
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
            THÊM THÔNG TIN CHỦ SỞ HỮU
        </h2>
    </div>
    <form name="formCustomer" method="POST" action="">
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
                    <label for="customer_name">
                        Họ và tên
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="ten" type="text" id="customer_name" class="form-control" placeholder="Họ và tên" value="{{ old('ten') }}">
                            <input name="id_cvu" type="hidden" value="6">
                        </div>
                    </div>
                </div>
                <div class= "col-md-6">
                    <label for="customer_address">
                        Địa chỉ
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="diachi" type="text" id="customer_address" class="form-control" placeholder="Địa chỉ" value="{{ old('diachi') }}">
                        </div>
                    </div>
                    </div>
                <div class= "col-md-6">
                    <label for="customer_phone">
                        Số điện thoại
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{10,11}" name="sdt" type="text" id="customer_phone" class="form-control" placeholder="Số điện thoại" value="{{ old('phone') }}">
                        </div>
                    </div>
                    </div>
                <div class= "col-md-6">
                    <label for="customer_email">
                        Email
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-alias="email" name="email" type="text" id="customer_email" class="form-control" data-val="true" data-val-required="Required" placeholder="Email" value="{{ old('email') }}">
                        </div>
                    </div>
                </div>
                <div class= "col-md-6">
                    <label for="customer_identity">
                        Chứng minh thư
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input data-inputmask-mask="9{12,15}" name="cmnd" type="text" id="customer_identity" class="form-control" placeholder="Chứng minh thư" value="{{ old('cmnd') }}">
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
        // $('#customer_birth').inputmask('9999/99/99',{alias: "mm/dd/yyyy"});
        // $('#customer_dayRange').inputmask('9999/99/99');
        $(document).ready(function() {
            $(":input[data-inputmask-mask]").inputmask();
            $(":input[data-inputmask-alias]").inputmask();
            $(":input[data-inputmask-regex]").inputmask("Regex");
        });
    </script>
@endpush