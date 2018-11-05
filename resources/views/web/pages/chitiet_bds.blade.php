@extends('web.layouts.base')

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
                    <!-- Single Listings Slides -->
                    <div class="single-listings-sliders owl-carousel">
                        <!-- Single Slide -->
                        <img src="{{ asset('south/img/bg-img/hero4.jpg') }}" alt="">
                        <!-- Single Slide -->
                        <img src="{{ asset('south/img/bg-img/hero5.jpg') }}" alt="">
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
                        <p class="location"><img src="{{ asset('south/img/icons/location.png') }}" alt="">{{ $bds->diachi_bds }}</p>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odiomattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.</p>
                        <!-- Meta -->
                        <div class="property-meta-data d-flex align-items-end">
                            <div class="new-tag">
                                <img src="{{ asset('south/img/icons/new.png') }}" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="{{ asset('south/img/icons/bathtub.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="garage">
                                <img src="{{ asset('south/img/icons/garage.png') }}" alt="">
                                <span>2</span>
                            </div>
                            <div class="space">
                                <img src="{{ asset('south/img/icons/space.png') }}" alt="">
                                <span>120 sq ft</span>
                            </div>
                        </div>
                        <br>
                        <!-- Core Features -->
                        <h5>Địa chỉ</h5>
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
                                <h2>Ngụy Yến Nhi</h2>
                                <p>Chăm sóc khách hàng</p>
                                <h6><img src="{{ asset('south/img/icons/phone-call.png') }}" alt=""> 0939928143</h6>
                                <h6><img src="{{ asset('south/img/icons/envelope.png') }}" alt=""> Nhinguy@gmail.com</h6>
                            </div>
                            <div class="realtor--contact-form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="realtor-name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="realtor-number" placeholder="Your Number">
                                    </div>
                                    <div class="form-group">
                                        <input type="enumber" class="form-control" id="realtor-email" placeholder="Your Mail">
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

    <!-- ##### Footer Area Start ##### -->
    @include('web.blocks.footer')
    <!-- ##### Footer Area End ##### -->
@endsection