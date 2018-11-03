@extends('admin.layouts.base')

@section('title')
    Sửa Quận Huyện - DreamHouse
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
            SỬA QUẬN HUYỆN
        </h2>
    </div>
    <form name="formDist" method="POST" action="{{ route('dist.update', ['data' => $data->id]) }}">
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
                    <label for="city">
                        Thành phố
                    </label>
                    <div class="form-group">
                        <select class="selectpicker" id = "city">
                            <option value="">-- Please select --</option>
                            @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->ten_tp }}</option>
                            @endforeach
                        </select>
                        <a type="button" class="btn bg-green waves-effect" href="{{ route('city.create') }}">
                            <i class="material-icons">add</i>
                        </a>
                        <input name="id_tp" type="text" id="id_tp" class="form-control" placeholder="id" value="{{ old('id_tp', $data->id_tp) }}">
                    </div>
                    <label for="dist_name">
                        Tên quận huyện
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="ten_quan" type="text" id="dist_name" class="form-control" placeholder="Tên quận huyện" value="{{ old('ten_quan', $data->ten_quan) }}">
                        </div>
                    </div>
                    <label for="dist_note">
                        Ghi chú
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="ghichu" id="dist_note" rows="5" class="form-control no-resize" placeholder="Ghi chú" value="{{ old('ghichu', $data->ghichu) }}">
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
        $("#city").change(function (e) {
            $("#id_tp").val($('#city').val());
        });
        $(document).ready(function() {
            $("#city").selectpicker("val", "{{ $data->id_tp }}");
        });
    </script>
@endpush