@extends('web.layouts.base')

@section('title')
    Liên hệ - DreamHouse
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
                        <h3 class="breadcumb-title">Liên hệ</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Thông tin liên hệ</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                            <ul>
                                <li class="d-flex align-items-center justify-content-between"><span>Thứ hai - Thứ sáu</span> <span>09:00 - 17:00</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Thứ bảy</span> <span>09:00- 11:00</span></li>
                                
                            </ul>
                        </div>
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="{{ asset('south/img/icons/phone-call.png') }}" alt=""> 0856789450</h6>
                            <h6><img src="{{ asset('south/img/icons/envelope.png') }}" alt=""> Longnguy@gmail.com</h6>
                            <h6><img src="{{ asset('south/img/icons/location.png') }}" alt=""> 1234 Võ Văn Kiệt, Quận Ninh Kiều, TPCT</h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="text" id="contact-name" placeholder="Tên của anh chị">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="number" id="contact-number" placeholder="Số điện thoại">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="contact-email" placeholder="Email của anh chị">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Thông tin anh chị cần cung cấp"></textarea>
                            </div>
                            <button type="submit" class="btn south-btn">Gửi tin nhắn</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    {{-- <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="googleMap" class="googleMap"></div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- ##### Footer Area Start ##### -->
    @include('web.blocks.footer')
    <!-- ##### Footer Area End ##### -->
@endsection
