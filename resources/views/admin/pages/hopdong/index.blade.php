@extends('admin.layouts.base')

@section('title')
    Hợp Đồng - DreamHouse
@endsection

@section('main')
@if(Session::has('flash_message'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ session('flash_message') }}
    </div>
@endif
<div class="card">
    <div class="body">
        <div class="table-responsive">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6">
                        <a type="button" class="btn bg-brown btn-lg waves-effect" href="{{ route('hopdong.create') }}">
                            Thêm
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        ID BĐS
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        ID khách hàng
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        ID nhân viên
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Tên hợp đồng
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Giá bán
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Giá thuê
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Phí môi giới
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Phí đăng bài
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Huê hồng
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        HThức TT
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Số lần TT
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Thời hạn TT
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Thời hạn HĐ
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Ngày lập
                                    </th>
                                    <th rowspan="1" colspan="1" style="width: 20px;"> 
                                    </th>
                                    <th rowspan="1" colspan="1" style="width: 20px;"> 
                                    </th>
                                    <th rowspan="1" colspan="1" style="width: 20px;"> 
                                    </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">
                                        ID BĐS
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        ID khách hàng
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        ID nhân viên
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Tên hợp đồng
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Giá bán
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Giá thuê
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Phí môi giới
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Phí đăng bài
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Huê hồng
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        HThức TT
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Số lần TT
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Thời hạn TT
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Thời hạn HĐ
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Ngày lập
                                    </th>
                                    <th rowspan="1" colspan="1">
                                    </th>
                                    <th rowspan="1" colspan="1">
                                    </th>
                                    <th rowspan="1" colspan="1">
                                    </th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @foreach($data as $data)
                                <tr role="row" class="odd">
                                    <td>{{ $data->id_bds }}</td>
                                    <td>{{ $data->id_kh }}</td>
                                    <td>{{ $data->id_nv }}</td>
                                    <td>{{ $data->ten_hd }}</td>
                                    <td>{{ $data->giaban }}</td>
                                    <td>{{ $data->giathue }}</td>
                                    <td>{{ $data->phi_mg }}</td>
                                    <td>{{ $data->phi_dangbai }}</td>
                                    <td>{{ $data->huehong }}</td>
                                    <td>{{ $data->hinhthucthanhtoan }}</td>
                                    <td>{{ $data->solanthanhtoan }}</td>
                                    <td>{{ $data->thoihanthanhtoan }}</td>
                                    <td>{{ $data->thoihanhopdong }}</td>
                                    <td>{{ $data->ngaylaphd }}</td>
                                    <td>
                                        <a type="button" class="btn bg-blue-grey waves-effect" href="{{ route('hopdong.edit', ['data' => $data->id]) }}">
                                            <i class="material-icons">edit</i>
                                        </a>
                                    </td>
                                    <td>
                                        <div data-toggle="modal" data-target="#cfmDel" onclick="$('#formDelete').attr('action', '{{ route('hopdong.destroy', ['data' => $data->id]) }}');" class="btn bg-red waves-effect">
                                            <i class="material-icons">delete</i>
                                        </div>
                                    </td>
                                    <td>
                                        <div data-toggle="modal" data-target="#cfmDel" onclick="$('#formDelete').attr('action', '{{ route('hopdong.destroy', ['data' => $data->id]) }}');" class="btn bg-red waves-effect">
                                            <i class="material-icons">delete</i>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="cfmDel" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="cfmDel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form method="POST" action="" role="form" id="formDelete">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <h3>Bạn có chắc muốn xóa dữ liệu này?</h3><br>
                    <button type="submit" class="btn bg-red btn-lg waves-effect">Xóa</button>
                    <button class="btn bg-blue-grey btn-lg waves-effect" data-dismiss="modal">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection