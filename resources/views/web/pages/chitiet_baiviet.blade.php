@extends('web.layouts.base')

@section('title')
    {{ $baiviet->ten_bv }} - DreamHouse
@endsection

@push('css')
    <style>
        .blog-post-thumbnail img{
            height: 346px;
            width: 730px;
            object-fit: cover;
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
                        <h3 class="breadcumb-title">Blog Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">

                    <div class="single-blog-area">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <img src="{{ asset('upload/bds/'.$baiviet->bds->hinhanh) }}" onerror="this.src='{{ url('south/img/bg-img/feature2.jpg') }}'" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <!-- Date -->
                            <div class="post-date">
                                <a href="#">{{ $baiviet->created_at->format('M d, Y') }}</a>
                            </div>
                            <!-- Headline -->
                            <a href="#" class="headline">{{ $baiviet->ten_bv }}</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p>By <a href="#">Admin</a> | in <a href="#">Uncategorized</a> | <a href="#">2 Comments</a></p>
                            </div>
                            <p>{!! $baiviet->noidung !!}</p>
                            <img class="mb-50" src="{{ asset('south/img/bg-img/hero3.jpg') }}" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia minus in recusandae cumque, laboriosam mollitia inventore nisi autem maiores nostrum ipsa labore beatae amet, dolore ex error fugit sunt aspernatur quidem. Sed laboriosam nihil consectetur facilis aliquid labore necessitatibus nemo dolore? Perspiciatis corrupti consectetur, doloribus aliquid voluptatibus ab atque inventore, est voluptates. Eum veniam hic velit, quia voluptates? Numquam aliquam accusantium hic iste, sequi nisi maiores minus iure eos est unde eum dolore amet suscipit?</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus accusamus accusantium nisi quas tempore quod placeat soluta, quam, ex, pariatur doloremque, quasi ut vitae aspernatur quisquam dolores consequatur deleniti sed perferendis consequuntur. Aut quod, dolorum molestiae veritatis molestias, nemo sit, voluptatibus, quaerat cupiditate magni dignissimos minus repellendus labore.</p>
                        </div>
                    </div>

                    <div class="comments-area">
                        <h5>4 Comments</h5>
                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <div class="comment-wrapper d-flex">
                                    <!-- Comment Meta -->
                                    <div class="comment-author">
                                        <img src="{{ asset('south/img/blog-img/c-1.jpg') }}" alt="">
                                    </div>
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <a href="#" class="comment-author-name">Maria Williams</a> |
                                            <a href="#" class="comment-date">Jan 29, 2018</a> |
                                            <a href="#" class="comment-reply">Reply</a>
                                        </div>
                                        <p>Consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Su spendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat.</p>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="single_comment_area">
                                        <div class="comment-wrapper d-flex">
                                            <!-- Comment Meta -->
                                            <div class="comment-author">
                                                <img src="{{ asset('south/img/blog-img/c-2.jpg') }}" alt="">
                                            </div>
                                            <!-- Comment Content -->
                                            <div class="comment-content">
                                                <div class="comment-meta">
                                                    <a href="#" class="comment-author-name">Maria Williams</a> |
                                                    <a href="#" class="comment-date">Jan 29, 2018</a> |
                                                    <a href="#" class="comment-reply">Reply</a>
                                                </div>
                                                <p>Consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Su spendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                            <li class="single_comment_area">
                                <div class="comment-wrapper d-flex">
                                    <!-- Comment Meta -->
                                    <div class="comment-author">
                                        <img src="{{ asset('south/img/blog-img/c-3.jpg') }}" alt="">
                                    </div>
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <div class="comment-meta">
                                            <a href="#" class="comment-author-name">Maria Williams</a> |
                                            <a href="#" class="comment-date">Jan 29, 2018</a> |
                                            <a href="#" class="comment-reply">Reply</a>
                                        </div>
                                        <p>Consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Su spendisse sit amet laoreet neque. Fusce sagittis suscipit sem a consequat.</p>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <!-- Leave A Comment -->
                    <div class="leave-comment-area mt-70 clearfix">
                        <div class="comment-form">
                            <h5>Leave a reply</h5>

                            <!-- Comment Form -->
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="contact-email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn south-btn">Submit Reply</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Search Widget -->
                        <!-- <div class="search-widget-area mb-70">
                            <form action="#" method="get">
                                <input type="search" name="search" id="search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div> -->

                        <!-- Catagories Widget -->
                        <!-- <div class="south-catagories-card mb-70">
                            <h5>Categories</h5>
                            <ul class="catagories-menu">
                                <li><a href="#">Radiology</a></li>
                                <li><a href="#">Cardiology</a></li>
                                <li><a href="#">Gastroenterology</a></li>
                                <li><a href="#">Neurology</a></li>
                                <li><a href="#">General surgery</a></li>
                            </ul>
                        </div> -->
                        
                        <p style="font-size: 18px; margin-bottom: 25px">Thông tin của bất động sản</p>
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="{{ asset('upload/bds/'.$baiviet->bds->hinhanh) }}" onerror="this.src='{{ url('south/img/bg-img/feature2.jpg') }}'" alt="">

                                <div class="tag">
                                    <span>{{ $baiviet->bds->hinhthuc }}</span>
                                </div>
                                <div class="list-price">
                                    <p>{{ number_format($baiviet->bds->gia) }} VND</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <a href="{{ asset('/'.$baiviet->bds->alias) }}"><h5>{{ $baiviet->bds->ten_bds }}</h5></a>
                                <p class="location"><img src="{{ asset('south/img/icons/location.png') }}" alt="">{{ $baiviet->bds->diachi_bds }}</p>
                                
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
                        <!-- Catagories Widget -->
                        {{--<div class="featured-properties-slides owl-carousel">
                            <!-- Single Slide -->
                            <div class="single-featured-property">
                                <!-- Property Thumbnail -->
                                <div class="property-thumb">
                                    <img src="img/bg-img/feature1.jpg" alt="">

                                    <div class="tag">
                                        <span>For Sale</span>
                                    </div>
                                    <div class="list-price">
                                        <p>$945 679</p>
                                    </div>
                                </div>
                                <!-- Property Content -->
                                <div class="property-content">
                                    <h5>Villa in Los Angeles</h5>
                                    <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                    <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                                        <div class="new-tag">
                                            <img src="img/icons/new.png" alt="">
                                        </div>
                                        <div class="bathroom">
                                            <img src="img/icons/bathtub.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <img src="img/icons/garage.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="space">
                                            <img src="img/icons/space.png" alt="">
                                            <span>120 sq ft</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Slide -->
                            <div class="single-featured-property">
                                <!-- Property Thumbnail -->
                                <div class="property-thumb">
                                    <img src="img/bg-img/feature2.jpg" alt="">

                                    <div class="tag">
                                        <span>For Sale</span>
                                    </div>
                                    <div class="list-price">
                                        <p>$945 679</p>
                                    </div>
                                </div>
                                <!-- Property Content -->
                                <div class="property-content">
                                    <h5>Town House in Los Angeles</h5>
                                    <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                    <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                    <div class="property-meta-data d-flex align-items-end justify-content-between">
                                        <div class="new-tag">
                                            <img src="img/icons/new.png" alt="">
                                        </div>
                                        <div class="bathroom">
                                            <img src="img/icons/bathtub.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <img src="img/icons/garage.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="space">
                                            <img src="img/icons/space.png" alt="">
                                            <span>120 sq ft</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('web.blocks.footer')
    <!-- ##### Footer Area End ##### -->
@endsection