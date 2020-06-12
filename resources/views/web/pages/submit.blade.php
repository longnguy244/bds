@extends('web.layouts.base')

@section('title')
    Kiểm tra thông tin - DreamHouse
@endsection

@push('css')
    <style>
        .property-thumb > img {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        span{
            font-size: 15px;
        }
    </style>
@endpush

@section('main')
    <!-- ##### Header Area Start ##### -->
    @include('web.blocks.header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- ##### Progress Bars & Accordions ##### -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Thông tin thanh Toán</h2>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <h4>THÔNG TIN KHÁCH HÀNG</h4>
                        <p> 
                            <span style="color: black"> Họ và tên: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->ten_kh }}</span>
                        </p>
                        <p> 
                            <span style="color: black"> Ngày sinh: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->ngaysinh_kh }}</span>
                        </p>
                        <p> 
                            <span style="color: black"> Địa chỉ: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->diachi_kh }}</span>
                        </p>
                        <p> 
                            <span style="color: black"> Điện thoại: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->phone_kh }}</span>
                        </p>
                        <p> 
                            <span style="color: black"> Email: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->email_kh }}</span>
                        </p>
                        <p> 
                            <span style="color: black"> Hộ khẩu: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->hokhau }}</span>
                        </p>
                        <p> 
                            <span style="color: black"> CMND/CCCD: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->cmnd_kh }}</span>
                        </p>
                    </div>
                </div>

                <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-6">
                    <h4>THÔNG TIN BẤT ĐỘNG SẢN</h4>
                    <p> 
                        <span style="color: black"> Tên bất động sản: </span>
                        <span style="float: right">{{ $bds->ten_bds }}</span>
                    </p>
                    <p> 
                        <span style="color: black"> Địa chỉ: </span>
                        <span style="float: right">{{ $bds->diachi_bds }}</span>
                    </p>
                    <p> 
                        <span style="color: black"> Số CNQSDD: </span>
                        <span style="float: right">{{ $bds->soCNQSDD }}</span>
                    </p>
                    <p> 
                        <span style="color: black"> Hình thức: </span>
                        <span style="float: right">{{ $bds->hinhthuc }}</span>
                    </p>
                    <p> 
                        <span style="color: black"> Giá: </span>
                        <span style="float: right">{{ $bds->gia }}</span>
                    </p>
                </div>

                <div class="col-12 col-lg-3">
                    <p>
                        <span>{{ $bds->ten_bds }}</span>
                        <span style="float: right">{{ number_format($bds->gia) }}đ</span>
                    </p>
                    <hr>
                    <p>
                        <span>Tiền đặt cọc</span>
                        <span style="float: right; font-size: 25px">5.000.000đ</span>
                    </p>
                    <div class="south-buttons-area mb-100">
                        <form action="{{ route('post.hopdong') }}" id="save_contract" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id_bds" value="{{ $bds->id }}">
                            <input type="hidden" name="id_kh"  value="{{ Auth::guard('customer')->user()->id }}">
                            <input type="hidden" name="id_nv"  value="1">
                            <input type="hidden" name="id_httt"  value="2">
                            <input type="hidden" name="ten_hd"  value="{{ $bds->ten_bds }}">
                            <input type="hidden" name="giaban"  value="{{ $bds->gia }}">
                            <input type="hidden" name="giathue"  value="đồng">
                            <input type="hidden" name="phi_mg"  value="2.000.000">
                            <input type="hidden" name="phi_dangbai"  value="đồng">
                            <input type="hidden" name="huehong"  value="1">
                            <input type="hidden" name="thoihanhopdong"  value="2020/12/31">
                            <input type="hidden" name="ngaylaphd"  value="2020/06/06">
                        </form>
                        <form action="{{ route('get.hopdong') }}" id="check_contract" method="get">
                            <input type="hidden" name="id_bds" value="{{ $bds->id }}">
                            <input type="hidden" name="id_kh"  value="{{ Auth::guard('customer')->user()->id }}">
                        </form>
                        <button onclick="submitAll();" class="btn south-btn m-1" style="width: 100%;" type="submit">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Elements Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('web.blocks.footer')
    <!-- ##### Footer Area End ##### -->
@endsection
@push('js')
    <script>
        function submitAll(){
            document.getElementById("save_contract").submit();
            document.getElementById("check_contract").submit();
        }
    </script>
@endpush


    
    
