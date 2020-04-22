@extends('admin.layouts.base')

@section('title')
    Bất Động Sản - DreamHouse
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
                        <a type="button" class="btn bg-brown btn-lg waves-effect" href="{{ route('bds.create') }}">
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
                                        Tên
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Loại BĐS
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Thành phố
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Địa chỉ
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Số CNQSDĐ
                                    </th>
                                    <th>Trạng thái</th>
                                    <th rowspan="1" colspan="1" style="width: 20px;"> 
                                    </th>
                                    <th rowspan="1" colspan="1" style="width: 20px;"> 
                                    </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">
                                        Tên
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Loại BĐS
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Thành phố
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Địa chỉ
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Số CNQSDĐ
                                    </th>
                                    <th>Trạng thái</th>
                                    <th rowspan="1" colspan="1">
                                    </th>
                                    <th rowspan="1" colspan="1">
                                    </th>
                                </tr>
                            </tfoot>
                            <tbody>
                            @foreach($data as $data)
                                <tr role="row" class="odd">
                                    <td>{{ $data->ten_bds }}</td>
                                    <td>{{ LoaiBDS($data->id_loaibds) }}</td>
                                    <td>{{ TenThanhPho($data->id_tp) }}</td>
                                    <td>{{ $data->diachi_bds }}</td>
                                    <td>{{ $data->soCNQSDD }}</td>
                                    <td rowspan="1" colspan="1">
                                        @if($data->status == 10)
                                            <div style="color:green">Đang bán</div>
                                        @else
                                            <div style="color:red">Đã bán</div>
                                        @endif
                                    </td>
                                    <td>
                                        <a type="button" class="btn bg-blue-grey waves-effect" href="{{ route('bds.edit', ['data' => $data->id]) }}">
                                            <i class="material-icons">edit</i>
                                        </a>
                                    </td>
                                    <td>
                                        <div data-toggle="modal" data-target="#cfmDel" onclick="$('#formDelete').attr('action', '{{ route('bds.destroy', ['data' => $data->id]) }}');" class="btn bg-red waves-effect">
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