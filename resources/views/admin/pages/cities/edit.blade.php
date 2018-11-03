@extends('admin.layouts.base')

@section('title')
    Sửa Thành Phố - DreamHouse
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
            SỬA THÀNH PHỐ
        </h2>
    </div>
    <form name="formCity" method="POST" action="{{ route('city.update', ['data' => $data->id]) }}">
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
                    <label for="city_name">
                        Tên thành phố
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="ten_tp" type="text" id="city_name" class="form-control" placeholder="Tên thành phố" value="{{ old('ten_tp', $data->ten_tp) }}">
                        </div>
                    </div>
                    <label for="city_note">
                        Ghi chú
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="ghichu" id="city_note" rows="5" class="form-control no-resize" placeholder="Ghi chú" value="{{ old('ghichu', $data->ghichu) }}">
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