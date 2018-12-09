@extends('web.layouts.base')

@section('title')
    Về chúng tôi - DreamHouse 
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
                        <h3 class="breadcumb-title">About us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    {{-- @include('web.blocks.search') --}}
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### About Content Wrapper Start ##### -->
    <section class="about-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>Chúng tôi tìm kiếm tổ ấm hoàn hảo</h2>
                        <p>Nhiều người đã tìm được ngôi nhà của mình tại Dreamhouse</p>
                    </div>
                    <div class="about-content">
                        <img class="wow fadeInUp" data-wow-delay="350ms" src="{{ asset('south/img/bg-img/about.jpg') }}" alt="">
                        <p class="wow fadeInUp" data-wow-delay="450ms"> Công ty được thành lập vào năm 2018 cùng với những thành viên đầu tiên của Dreamhouse. Được sự tin tưởng của khách hàng, ..</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>Căn hộ nổi bật</h2>
                        <p>Căn hộ được nhiều người xem</p>
                    </div>

                    <div class="featured-properties-slides owl-carousel wow fadeInUp" data-wow-delay="350ms">
                        @foreach($bds as $key => $val)
                        <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="{{ url('upload/bds/'.$val->hinhanh) }}" alt="">

                                <div class="tag">
                                    <span>{{ $val->hinhthuc }}</span>
                                </div>
                                <div class="list-price">
                                    <p>{{ number_format($val->gia) }} VND</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <a href="{{ asset('/'.$val->alias) }}"><h5>{{ $val->ten_bds }}</h5></a>
                                <p class="location"><img src="{{ asset('south/img/icons/location.png') }}" alt="">{{ $val->diachi_bds }}</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="{{ asset('south/img/icons/new.png') }}" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="{{ asset('south/img/icons/bathtub.png') }}" alt="">
                                        <span>{{ $val->phongtam }}</span>
                                    </div>
                                    <div class="space">
                                        <img src="{{ asset('south/img/icons/space.png') }}" alt="">
                                        <span>{{ $val->dientichsd }} m2</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Content Wrapper End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    @include('web.blocks.timbds')
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Meet The Team Area Start ##### -->
    <section class="meet-the-team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Gương mặt đại diện</h2>
                        <p>Suspendisse dictum enim sit amet libero</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="{{ asset('south/img/bg-img/team1.jpg') }}" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="{{ asset('south/img/icons/prize.png') }}" alt="">
                                <h2>Jeremy Scott</h2>
                                <p>Realtor</p>
                            </div>
                            <div class="address">
                                <h6><img src="{{ asset('south/img/icons/phone-call.png') }}" alt=""> +45 677 8993000 223</h6>
                                <h6><img src="{{ asset('south/img/icons/envelope.png') }}" alt=""> office@template.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="{{ asset('south/img/bg-img/team2.jpg') }}" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="{{ asset('south/img/icons/prize.png') }}" alt="">
                                <h2>Maria Williams</h2>
                                <p>Realtor</p>
                            </div>
                            <div class="address">
                                <h6><img src="{{ asset('south/img/icons/phone-call.png') }}" alt=""> +45 677 8993000 223</h6>
                                <h6><img src="{{ asset('south/img/icons/envelope.png') }}" alt=""> office@template.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="{{ asset('south/img/bg-img/team3.jpg') }}" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="{{ asset('south/img/icons/prize.png') }}" alt="">
                                <h2>Patrick Joe</h2>
                                <p>Realtor</p>
                            </div>
                            <div class="address">
                                <h6><img src="{{ asset('south/img/icons/phone-call.png') }}" alt=""> +45 677 8993000 223</h6>
                                <h6><img src="{{ asset('south/img/icons/envelope.png') }}" alt=""> office@template.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Meet The Team Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('web.blocks.footer')
    <!-- ##### Footer Area End ##### -->
@endsection