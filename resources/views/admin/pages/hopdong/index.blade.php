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
                                        ID
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Tên hợp đồng
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        BĐS
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Giá bán
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Giá thuê
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        HThức TT
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Ngày lập
                                    </th>
                                    <th style="text-align: center;"> 
                                        Thao tác
                                    </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">
                                        ID
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Tên hợp đồng
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        BĐS
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Giá bán
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Giá thuê
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        HThức TT
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Ngày lập
                                    </th>
                                    <th style="text-align: center;"> 
                                        Thao tác
                                    </th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @foreach($data as $data)
                                <tr role="row" class="odd">
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->ten_hd }}</td>
                                    <td>{{ TenBDS($data->id_bds) }}</td>
                                    <td>{{ $data->giaban }}</td>
                                    <td>{{ $data->giathue }}</td>
                                    <td>{{ $data->hinhthucthanhtoan }}</td>
                                    <td>{{ $data->ngaylaphd }}</td>
                                    <td><center>
                                        <a type="button" class="btn bg-blue-grey waves-effect" href="{{ route('hopdong.edit', ['data' => $data->id]) }}">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <div data-toggle="modal" data-target="#cfmDel" onclick="$('#formDelete').attr('action', '{{ route('hopdong.destroy', ['data' => $data->id]) }}');" class="btn bg-red waves-effect">
                                            <i class="material-icons">delete</i>
                                        </div>
                                        <a type="button" class="btn bg-light-green waves-effect" href="{{ route('hopdong.show', ['data' => $data->id]) }}">
                                            <i class="material-icons">visibility</i>
                                        </a>
                                        </center>
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