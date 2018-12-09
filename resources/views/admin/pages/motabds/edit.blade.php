@extends('admin.layouts.base')

@section('title')
    Sửa Mô Tả Bất Động Sản - DreamHouse
@endsection

@push('css')
    <style type="text/css">
        [type="checkbox"]:not(:checked), [type="checkbox"]:checked {
            position: inherit;
            opacity: 1;
        }

        .icon_del{
            position: relative;
            top:-66px;
            left:-170px;
            background: red;
            padding: 3px 5px 3px 5px;
            color: white;
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
            SỬA MÔ TẢ BẤT ĐỘNG SẢN <span style="color: red; text-transform: uppercase;">{{ TenBDS($data->id_bds) }}</span>
        </h2>
    </div>
    <form name="formMotaBds" method="POST" action="{{ route('motabds.update', ['data' => $data->id]) }}" enctype="multipart/form-data">
	{{ method_field('PUT') }}
    {{ csrf_field() }}
        <div class="body">
            <div class="row clearfix">
                <div class="col-md-8 row">
                    <div class= "col-md-6">
                        <label for="bds">
                            Tên bất động sản
                        </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" style="color: red; font-weight: bold; font-size: 18px;"  class="form-control" value="{{ TenBDS($data->id_bds) }}">
                                <input name="id_bds" type="text" id="id_bds" class="form-control hidden" placeholder="id" value="{{ old('id_bds', $data->id_bds) }}">
                            </div>
                        </div>
                        <label for="dientich">
                            Diện tích
                        </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input data-inputmask-mask="9{1,}" name="dientich" type="text" id="dientich" class="form-control" placeholder="Diện tích" value="{{ old('dientich', $data->dientich) }}">
                            </div>
                        </div>
                        <label for="chieudai">
                            Chiều dài
                        </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input data-inputmask-mask="9{1,}" name="chieudai" type="text" id="chieudai" class="form-control" placeholder="Chiều dài" value="{{ old('chieudai', $data->chieudai) }}">
                            </div>
                        </div>
                        <label for="bds_owner">
                            Chiều rộng
                        </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input data-inputmask-mask="9{1,}" name="chieurong" type="text" id="chieurong" class="form-control" placeholder="Chiều rộng" value="{{ old('chieurong', $data->chieurong) }}">
                            </div>
                        </div>
                        <label for="dientichxd">
                            Diện tích xây dựng
                        </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input data-inputmask-mask="9{1,}" name="dientichxd" type="text" id="dientichxd" class="form-control" placeholder="Diện tích xây dựng" value="{{ old('dientichxd', $data->dientichxd) }}">
                            </div>
                        </div>
                        <label for="dientichsd">
                            Diện tích sử dụng
                        </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input data-inputmask-mask="9{1,}" name="dientichsd" type="text" id="dientichsd" class="form-control" placeholder="Diện tích sử dụng" value="{{ old('dientichsd', $data->dientichsd) }}">
                            </div>
                        </div>
                    </div>
                    <div class= "col-md-6">
                        <label for="phongngu">
                            Số phòng ngủ
                        </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input data-inputmask-mask="9{1,}" name="phongngu" type="text" id="phongngu" class="form-control" placeholder="Số phòng ngủ" value="{{ old('phongngu', $data->phongngu) }}">
                            </div>
                        </div>
                        <label for="phongtam">
                            Số phòng tắm
                        </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input data-inputmask-mask="9{1,}" name="phongtam" type="text" id="phongtam" class="form-control" placeholder="Số phòng tắm" value="{{ old('phongtam', $data->phongtam) }}">
                            </div>
                        </div>
                        <label for="cautruc">
                            Cấu trúc
                        </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input name="cautruc" type="text" id="cautruc" class="form-control" placeholder="Cấu trúc" value="{{ old('cautruc', $data->cautruc) }}">
                            </div>
                        </div>
                        <label for="tiennghi">
                            Tiện nghi
                        </label>
                        <div class="form-group">
                            <div class="form-line">
                                <input name="tiennghi" type="text" id="tiennghi" class="form-control" placeholder="Tiện nghi" value="{{ old('tiennghi', $data->tiennghi) }}">
                            </div>
                        </div>
                        <label for="bds_note">
                            Ghi chú
                        </label>
                        <div class="form-group">
                            <div class="form-line">
                                <textarea name="ghichu" id="bds_note" rows="5" class="form-control no-resize" placeholder="Ghi chú" value="{{ old('ghichu', $data->ghichu) }}">
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
                                       <input type="checkbox" name="tieuchi[]" class="" value="{{ $val->id }}" 
                                            @foreach ($tieuchibds as $key => $data)
                                               @if($data->id_bds == $bds->id && $data->id_tieuchi == $val->id) 
                                                    checked 
                                                @endif
                                            @endforeach >
                                    </td>
                                    <td>
                                         {{ $val->tentieuchi }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class= "col-md-12"><center>
                        <button type="submit" class="btn bg-brown btn-lg waves-effect">
                            Lưu
                        </button>
                        <a type="button" class="btn bg-grey btn-lg waves-effect" href="{{ URL::previous() }}">
                            Quay Lại
                        </a></center>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="" class="m-b-30">
                        Hình chi tiết
                    </label>
                    <div class="col-md-12">
                        @foreach($hinhanh as $key => $data)
                        <div class="form-group" id="{{ $key }}">
                            <img src="{{ url('upload/bds/detail/'.$data->hinhanh) }}" class="m-b-20" width="60%" alt="" id="{{ $key }}" id_hinh="{{ $data->id }}">
                            <a href="javascript:void(0)" type="button" id="del_img_demo" class=" icon_del"><i class="fa fa-times"></i></a>
                            <br>
                        </div>
                        @endforeach
                        <button type="button" class="btn btn-primary m-b-15" id="them">Thêm hình</button>
                        <div id="insert"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
@push('js')

    <script type="text/javascript">
        $(document).ready(function(){
            $("#them").click(function(){
                $("#insert").append('<input name="imgDetail[]" type="file" id="imgdetail" class="form-control m-b-15" value="">');
            });
        });


        $(document).ready(function(){
           $("a#del_img_demo").on('click',function(){
                var url = "{{ asset('admin/delete/hinhanhbds') }}/";
                var _token = $("form[name='formMotaBds']").find("input[name='_token']").val();
                var id_hinh = $(this).parent().find("img").attr("id_hinh");
                var hinh = $(this).parent().find("img").attr("src");
                var rid = $(this).parent().find("img").attr("id");
                $.ajax({
                    url: url + id_hinh,
                    type: 'GET',
                    cache: false,
                    data: {"_token":_token,"id_hinh":id_hinh,"urlHinh":hinh},
                    success: function(data){
                        if(data == "OK"){
                            $('#'+rid).remove();
                        }else{
                            alert("Error!!!");
                        }
                    }
                })
           }); 
        });

    </script>
    <script>
        $(".selectpicker").selectpicker();
        $("#bds").change(function (e) {
            $("#id_bds").val($('#bds').val());
        });
        $(document).ready(function() {
            $(":input[data-inputmask-mask]").inputmask();
            $(":input[data-inputmask-alias]").inputmask();
            $(":input[data-inputmask-regex]").inputmask("Regex");
            $("#bds").selectpicker("val", "{{ $data->id_bds }}");
        });
    </script>
@endpush