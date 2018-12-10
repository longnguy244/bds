@extends('admin.layouts.base')

@section('title')
    Hóa Đơn - DreamHouse
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
                        <a type="button" class="btn bg-brown btn-lg waves-effect" href="{{ route('get.hoadon.create') }}">
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
                                        Tên nhân viên
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Tên hợp đồng
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Lý do thu
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Tổng tiền
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Ngày thu
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
                                        Tên nhân viên
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Tên hợp đồng
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Lý do thu
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Tổng tiền
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Ngày thu
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
                                    <td>{{ TenNhanVien($data->id_nv) }}</td>
                                    <td>{{ Tenhopdong($data->id_hd) }}</td>
                                    <td>{{ $data->lydothu }}</td>
                                    <td>{{ $data->tongtien }}</td>
                                    <td>{{ date_format(new dateTime($data->ngaythu),'d/m/Y')}}</td>
                                    <td>
                                        <a type="button" class="btn bg-blue-grey waves-effect" href="{{ route('get.hoadon.edit', ['data' => $data->id]) }}">
                                            <i class="material-icons">edit</i>
                                        </a>
                                    </td>
                                    <td>
                                        {{-- <div data-toggle="modal" data-target="#cfmDel" onclick="$('#formDelete')" class="btn bg-red waves-effect">
                                            <i class="material-icons">delete</i>
                                        </div> --}}
                                        
                                        <a href="{{ route('hoadon.delete', $data->id) }}" data-target="#cfmDel" class="btn bg-red waves-effect" ><i class="material-icons" >delete</i></a>
                                    </td>
                                    <td>
                                         <a type="button" class="btn bg-light-green waves-effect" href="{{ route('print.hoadon', $data->id) }}">
                                            <i class="material-icons">visibility</i>
                                        </a>
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
                    <h3>Bạn có chắc muốn xóa dữ liệu này?</h3><br>
                    <button type="submit" class="btn bg-red btn-lg waves-effect">Xóa</button>
                    <button class="btn bg-blue-grey btn-lg waves-effect" data-dismiss="modal">Hủy</button>
            </div>
        </div>
    </div>
</div>
@endsection