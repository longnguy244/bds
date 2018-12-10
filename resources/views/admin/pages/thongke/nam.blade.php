@extends('admin.layouts.base')

@section('title')
    Thống kê theo tháng - DreamHouse
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
        <!-- <div class="table-responsive">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6">
                        <a type="button" class="btn bg-brown btn-lg waves-effect" href="{{ route('bienbanhopdong.create') }}">
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
                                        ID hợp đồng
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Lý do thanh lý
                                    </th>
                                    <th aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: auto;">
                                        Ngày lập biên bản
                                    </th>
                                    <th style="text-align: center;"> 
                                        Thao tác
                                    </th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">
                                        ID nhân viên
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Lý do thanh lý
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Ngày lập biên bản
                                    </th>
                                    <th style="text-align: center;"> 
                                        Thao tác
                                    </th>
                                </tr>
                            </tfoot>
                            <tbody>
                            {{-- @foreach()
                                <tr role="row" class="odd">
                                    <td>{{ $data->id_hd }}</td>
                                    <td>{{ $data->lydothanhly }}</td>
                                    <td>{{ $data->ngaylapbb }}</td>
                                    <td><center>
                                        <a type="button" class="btn bg-blue-grey waves-effect" href="{{ route('bienbanhopdong.edit', ['data' => $data->id]) }}">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <div data-toggle="modal" data-target="#cfmDel" onclick="$('#formDelete').attr('action', '{{ route('bienbanhopdong.destroy', ['data' => $data->id]) }}');" class="btn bg-red waves-effect">
                                            <i class="material-icons">delete</i>
                                        </div>
                                        <a type="button" class="btn bg-light-green waves-effect" href="{{ route('print.bienban', ['data' => $data->id]) }}">
                                            <i class="material-icons">visibility</i>
                                        </a>
                                        </center>
                                    </td>
                                </tr>
                            @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Thống kê</th>
                                        <th>Tháng</th>
                                        <th>Năm</th>
                                        <th>Tổng chi tiêu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Larry</td>
                                        <td>Jellybean</td>
                                        <td>@lajelly</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td>Kikat</td>
                                        <td>@lakitkat</td>
                                    </tr>
                                </tbody>
                            </table>
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