@extends('admin.layouts.base')

@section('title')
    Khách Hàng - DreamHouse
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
                        <a type="button" class="btn bg-brown btn-lg waves-effect" href="{{ route('customer.create') }}">
                            Thêm
                        </a>
                    </div>
                    <!-- <div class="col-sm-6">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                            <label>Search:
                                <input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0">
                            </label>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Họ tên
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Ngày sinh
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Địa chỉ
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        SĐT
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Hộ khẩu
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        CMND
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
                                        Họ tên
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Ngày sinh
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Địa chỉ
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        SĐT
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Hộ khẩu
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        CMND
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
                                    <td>{{ $data->ten_nv }}</td>
                                    <td>{{ $data->ngaysinh_nv }}</td>
                                    <td>{{ $data->diachi_nv }}</td>
                                    <td>{{ $data->phone_nv }}</td>
                                    <td>{{ $data->hokhau }}</td>
                                    <td>{{ $data->cmnd_nv }}</td>
                                    <td>
                                        <a type="button" class="btn bg-blue-grey waves-effect" href="{{ route('customer.edit', ['data' => $data->id]) }}">
                                            <i class="material-icons">edit</i>
                                        </a>
                                    </td>
                                    <td>
                                        <div data-toggle="modal" data-target="#cfmDel" onclick="$('#formDelete').attr('action', '{{ route('customer.destroy', ['data' => $data->id]) }}');" class="btn bg-red waves-effect">
                                            <i class="material-icons">delete</i>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            Showing 1 to 10 of 57 entries
                        </div>
                    </div>
                    <div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                        <ul class="pagination">
                            <li class="paginate_button previous disabled" id="DataTables_Table_0_previous">
                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0">Previous</a>
                            </li>
                            <li class="paginate_button active">
                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a>
                            </li>
                            <li class="paginate_button ">
                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a>
                            </li>
                            <li class="paginate_button ">
                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0">3</a>
                            </li>
                            <li class="paginate_button ">
                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0">4</a>
                            </li>
                            <li class="paginate_button ">
                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0">5</a>
                            </li>
                            <li class="paginate_button ">
                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0">6</a>
                            </li>
                            <li class="paginate_button next" id="DataTables_Table_0_next">
                                <a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0">Next</a>
                            </li>
                        </ul>
                    </div>
                </div> -->
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