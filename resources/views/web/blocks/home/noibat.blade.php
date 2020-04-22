

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
            @foreach($bds as $bds1)
            <!-- Single Featured Property -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Property Thumbnail -->
                    <div class="property-thumb">
                        <div class="tag">
                            <div class="property-thumb">
                                <img src="{{ url('upload/bds/'.$bds1->hinhanh) }}" alt="">

                                <div class="tag">
                                    <span>{{ $bds1->hinhthuc }}</span>
                                </div>
                                <div class="list-price">
                                    <p>{{ number_format($bds1->gia) }} VND</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="list-price">
                            @if(isset($bds1->hopdong))
                            <p>${{ $bds1->hopdong->giaban }}</p>
                            @endif
                        </div> -->
                    </div>
                    <!-- Property Content -->
                    <div class="property-content">
                        <a href="{{ asset('/'.$bds1->alias) }}"><h5>{{ $bds1->ten_bds }}</h5></a>
                        <p class="location"><img src="{{ asset('south/img/icons/location.png') }}" alt="">{{ $bds1->diachi_bds }}</p>
                        <p></p>
                        <div class="property-meta-data d-flex align-items-end justify-content-between">
                            <div class="new-tag">
                                <img src="{{ asset('south/img/icons/new.png') }}" alt="">
                            </div>
                            <div class="bathroom">
                                <img src="{{ asset('south/img/icons/bathtub.png') }}" alt="">
                                <span>{{ $bds1->phongtam }}</span>
                            </div>
                            <div class="space">
                                <img src="{{ asset('south/img/icons/space.png') }}" alt="">
                                <span>{{ $bds1->dientichsd }}</span>
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