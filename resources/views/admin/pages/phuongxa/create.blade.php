@extends('admin.layouts.base')

@section('title')
    Thêm Phường Xã - DreamHouse
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
            THÊM PHƯỜNG XÃ
        </h2>
    </div>
    <form name="formWard" method="POST" action="{{ route('ward.store') }}">
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
                    <label for="dist">
                        Quận huyện
                    </label>
                    <div class="form-group">
                        <select class="selectpicker" id = "dist">
                            <option value="">-- Please select --</option>
                            @foreach($dists as $dist)
                            <option value="{{ $dist->id }}">{{ $dist->ten_quan }}</option>
                            @endforeach
                        </select>
                        <a type="button" class="btn bg-green waves-effect" href="{{ route('dist.create') }}">
                            <i class="material-icons">add</i>
                        </a>
                        <input name="id_quan" type="text" id="id_quan" class="form-control" placeholder="id" value="{{ old('id_quan') }}">
                    </div>
                    <label for="ward_name">
                        Tên phường xã
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <input name="ten_phuong" type="text" id="ward_name" class="form-control" placeholder="Tên phường xã" value="{{ old('ten_phuong') }}">
                        </div>
                    </div>
                    <label for="ward_note">
                        Ghi chú
                    </label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="ghichu" id="ward_note" rows="5" class="form-control no-resize" placeholder="Ghi chú" value="{{ old('ghichu') }}">
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
        $("#dist").change(function (e) {
            $("#id_quan").val($('#dist').val());
        });
    </script>
@endpush