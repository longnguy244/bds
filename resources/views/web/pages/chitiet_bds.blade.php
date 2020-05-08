@extends('web.layouts.base')

@push('css')
    <style type="text/css" media="screen">
        .content p{
            margin-bottom: 10px;
            margin-left: 10px;
            color: #635b5b
        }
        .content p span{
            color: black;
        }

        .modal{
            top: 80px;
            z-index: 10000;
        }
    </style>
@endpush

@section('title')
    {{ $bds->ten_bds }} - DreamHouse
@endsection

@section('main')
    <!-- ##### Header Area Start ##### -->
    @include('web.blocks.header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url({{ url('south/img/bg-img/hero1.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Property</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    <?php //include('web.blocks.search') ?>
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### Listings Content Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <!-- <iframe src="https://storage.googleapis.com/vrview/2.0/index.html?preview=https://www.sketchuptextureclub.com/public/models/m/sketchuptexture-3d-models-5021_44.jpg&image=https://www.sketchuptextureclub.com/public/models/m/sketchuptexture-3d-models-5021_44.jpg&is_stereo=true&"></iframe> -->
                    <!-- Single Listings Slides -->
                    <div class="single-listings-sliders owl-carousel">
                        <!-- Single Slide -->
                        <img src="{{ url('upload/bds/'.$bds->hinhanh) }}" height="10px" width="50%">
                        <!-- Single Slide -->
                        @foreach($hinhanh as $key => $hinhanh)
                        <img src="{{ url('upload/bds/detail/'.$hinhanh->hinhanh) }}" height="10px" width="50%" alt="">
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="listings-content">
                        <!-- Price -->
                        <div class="list-price">
                            @if(isset($bds->hopdong))
                            <p>{{ $bds->hopdong->giaban }}</p>
                            @endif
                        </div>
                        <h5>{{ $bds->ten_bds }}</h5>
                        <h4>{{ number_format($bds->gia) }} VND</h4>
                        <!-- <button class="btn btn south-btn" data-toggle="modal" data-target="#myModal" >MUA</button> -->
                        <a href="{{ route('thanhtoan', $bds->id) }}"><button class="btn btn south-btn">MUA</button></a>
                        <hr>
                        <h6>Địa chỉ</h6>
                        <p class="location"><img src="{{ asset('south/img/icons/location.png') }}" alt="">{{ $bds->diachi_bds }}</p>
                        <div class="content">
                            
                        <h6>Chi tiết</h6>
                        <p><span>Diện tích:</span> {{ $chitiet->dientich }} mét vuông</p>
                        <p><span>Chiều dài:</span> {{ $chitiet->chieudai }}m</p>
                        <p><span>Chiều rộng:</span> {{ $chitiet->chieurong }}m</p>
                        <p><span>Diện tích xây dựng:</span> {{ $chitiet->dientichxd }} mét vuông</p>
                        <p><span>Diện tích sử dụng:</span> {{ $chitiet->dientichsd }} mét vuông</p>
                        <p><span>Số phòng ngủ:</span> {{ $chitiet->phongngu }} phòng</p>
                        <p><span>Số phòng tắm:</span> {{ $chitiet->phongtam }} phòng</p>
                        <p><span>Cấu trúc:</span> {{ $chitiet->cautruc }}</p>
                        <p><span>Tiện nghi:</span> {{ $chitiet->tiennghi }}</p>
                        <br>
                        <h6>Ghi chú</h6>
                        <p>{{ $chitiet->ghichu }}</p><hr>
                        <p>{{ $bds->ghichu }}</p>
                        </div>
                        <!-- Meta -->
                        <div class="property-meta-data d-flex align-items-end">
                            <div class="new-tag">
                                <img src="{{ asset('south/img/icons/new.png') }}" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="{{ asset('south/img/icons/bathtub.png') }}" alt="">
                                <span>{{ $chitiet->phongtam }}</span>
                            </div>
                            <div class="space">
                                <img src="{{ asset('south/img/icons/space.png') }}" alt="">
                                <span>{{ $chitiet->dientichsd }}m2</span>
                            </div>
                        </div>
                        <br>
                        <!-- Core Features -->
                        <h5>Tọa độ</h5>
                        {!! $bds->toado !!}
                        <!-- Listings Btn Groups -->
                        {{-- <div class="listings-btn-groups">
                            <a href="#" class="btn south-btn">See Floor plans</a>
                            <a href="#" class="btn south-btn active">calculate mortgage</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact-realtor-wrapper">
                        <div class="realtor-info">
                            <img src="{{ asset('south/img/bg-img/listing.jpg') }}" alt="">
                            <div class="realtor---info">
                                <h2>Ngụy Quới Long</h2>
                                <p>Chăm sóc khách hàng</p>
                                <h6><img src="{{ asset('south/img/icons/phone-call.png') }}" alt=""> 0856789450</h6>
                                <h6><img src="{{ asset('south/img/icons/envelope.png') }}" alt=""> Longnguy@gmail.com</h6>
                            </div>
                            <div class="realtor--contact-form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input required type="text" class="form-control" id="realtor-name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input required type="number" class="form-control" id="realtor-number" placeholder="Your Number">
                                    </div>
                                    <div class="form-group">
                                        <input required type="enumber" class="form-control" id="realtor-email" placeholder="Your Mail">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="realtor-message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn south-btn">Liên hệ</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Listing Maps -->
            <div class="row">
                <div class="col-12">
                    <div class="listings-maps mt-100">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Listings Content Area End ##### -->

    <!-- Modal -->
    @if(Auth::guard('customer')->check())
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="#" method="post">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Họ tên</label>
                        <input required type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Địa chỉ</label>
                        <input required type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Số CMND</label>
                        <input required type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Hình thức thanh toán</label>
                        <select required id="hinhthuc" class="form-control">
                            <option value="">Chọn hình thức thanh toán</option>
                            <option value="0">Thẻ nội địa</option>
                            <option value="1">Thẻ tín dụng</option>
                        </select>
                    </div>
                    <div class="creditcard" style="display: none">
                        <div class="form-group">
                            <label for="">Ngân hàng</label>
                            <select id="hinhthuc" class="form-control">
                                <option value="sacombank">Sacombank</option>
                                <option value="vietcombank">Vietcombank</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Chủ thẻ</label>
                            <input  type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Mã thẻ</label>
                            <input  type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Ngày hết hạn</label>
                            <input  type="date" class="form-control">
                        </div>
                    </div>
                    <div class="mastercard" style="display: none">
                        <div class="form-group">
                            <label for="">Chủ thẻ</label>
                            <input  type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Mã thẻ</label>
                            <input  type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Ngày hết hạn</label>
                            <input   type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">CCV</label>
                            <input   type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <!-- <a href="{{ route('get.sell',$bds->id) }}" class="btn south-btn">Mua</a> -->
                    <button type="submit" class="btn south-btn">Mua</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    @else
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" style="max-width: 400px" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Vui lòng đăng nhập để thực hiện</h5>
                    <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- ##### Footer Area Start ##### -->
    @include('web.blocks.footer')
    <!-- ##### Footer Area End ##### -->
@endsection

@push('js')
<script>
    $('#hinhthuc').change(function(){
        if($(this).val() == 0 ){
            $('.mastercard').hide();
            $('.creditcard').show();
        }else{
            $('.creditcard').hide();
            $('.mastercard').show();
        }
    })
</script>
@endpush