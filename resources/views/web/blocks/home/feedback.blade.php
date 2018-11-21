
<section class="south-testimonials-area section-padding-100" style="background: #ffd8ba">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                    <h2>Nhận xét từ khách hàng</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">

                    @foreach($data as $data)

                    <div class="single-testimonial-slide text-center">
                        <h5>{{$data->tieude}}</h5>
                        <p>{{$data->noidung}}</p>

                        <div class="testimonial-author-info">
                            <p>{{$data->ten}}, <span>Customer</span></p>
                        </div>
                    </div>

                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>