

<section class="featured-properties-area section-padding-100-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading wow fadeInUp">
                    <h2>Căn hộ nổi bật</h2>
                    <p>Những căn hộ phù hợp với mọi tiêu chí tìm kiếm của bạn</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($bds as $bds)
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
                            @if(isset($bds->hopdong))
                            <p>${{ $bds->hopdong->giaban }}</p>
                            @endif
                        </div>
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <a href="{{ asset('/'.$bds->alias) }}"><h5>{{ $bds->ten_bds }}</h5></a>
                        <p class="location"><img src="{{ asset('south/img/icons/location.png') }}" alt="">{{ $bds->diachi_bds }}</p>
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
            <div class="col-md-10"></div>
            <div class="col-md-2 xem-them"><a href="{{ route('batdongsan') }}">Xem thêm...</a></div>
        </div>

    </div>
</section>