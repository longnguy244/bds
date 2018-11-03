@extends('admin.layouts.base')

@section('title')
    Sửa Loại Bất Động Sản - DreamHouse
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
            SỬA LOẠI BẤT ĐỘNG SẢN
        </h2>
    </div>
    <form name="formlLoaibds" method="POST" action="{{ route('loaibds.update', ['data' => $data->id]) }}">
	{{ method_field('PUT') }}
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
                        Tên loại bất động sản
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="ten_loaibds" type="text" id="loaibds_name" class="form-control" placeholder="Tên loại bất động sản" value="{{ old('ten_loaibds', $data->ten_loaibds) }}">
                        </div>
                    </div>
                    <label for="loaibds_note">
                        Ghi chú
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="ghichu" id="loaibds_note" rows="5" class="form-control no-resize" placeholder="Ghi chú" value="{{ old('ghichu', $data->ghichu) }}">
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
        // $('#customer_birth').inputmask('9999/99/99',{alias: "mm/dd/yyyy"});
        // $('#customer_dayRange').inputmask('9999/99/99');
        $(document).ready(function() {
            $(":input[data-inputmask-mask]").inputmask();
            $(":input[data-inputmask-alias]").inputmask();
            $(":input[data-inputmask-regex]").inputmask("Regex");
        });
    </script>
@endpush