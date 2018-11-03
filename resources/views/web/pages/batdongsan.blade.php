@extends('web.layouts.base')

@section('title')
    Bất động sản - DreamHouse
@endsection


@push('css')

    <style>
        .pagi{
            border: red;
        }
    </style>
@endpush
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
                        <h3 class="breadcumb-title">REAL ESTATE</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    @include('web.blocks.search')
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### Listing Content Wrapper Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="listings-top-meta d-flex justify-content-between mb-100">
                        <div class="view-area d-flex align-items-center">
                            <span>View as:</span>
                            <div class="grid_view ml-15"><a href="#" class="active"><i class="fa fa-th" aria-hidden="true"></i></a></div>
                            <div class="list_view ml-15"><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="order-by-area d-flex align-items-center">
                            <span class="mr-15">Order by:</span>
                            <select>
                              <option selected>Default</option>
                              <option value="1">Newest</option>
                              <option value="2">Sales</option>
                              <option value="3">Ratings</option>
                              <option value="3">Popularity</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
            @foreach($bds as $val)
                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="{{ asset('south/img/bg-img/feature1.jpg') }}" alt="">

                            <div class="tag">
                                <span>For Sale</span>
                            </div>
                            <div class="list-price">
                                @if(isset($val->hopdong))
                                <p>${{ $val->hopdong->giaban }}</p>
                                @endif
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <a href="{{ asset('/'.$val->alias) }}"><h5>{{ $val->ten_bds }}</h5></a>
                            <p class="location"><img src="{{ asset('south/img/icons/location.png') }}" alt="">{{ $val->diachi_bds }}</p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
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
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="south-pagination d-flex justify-content-end">
                        <nav aria-label="Page navigation">
                            {!! $bds->render() !!}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Listing Content Wrapper Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('web.blocks.footer')
    <!-- ##### Footer Area End ##### -->
@endsection

