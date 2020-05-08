@extends('web.layouts.base')

@section('title')
    Thanh toán - DreamHouse
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

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url({{ asset('south/img/bg-img/hero4.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Thanh Toán</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area section-padding-100-0">
        <div class="container">
            <!-- <div class="row">
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Thanh Toán</h2>
                    </div>
                    <div class="south-buttons-area mb-100">
                        <a href="#" class="btn south-btn m-1">Search</a>
                        <a href="#" class="btn south-btn active m-1">Search</a>
                        <a href="#" class="btn south-btn btn-2 m-1">Search</a>
                        <a href="#" class="btn south-btn btn-3 m-1">Search</a>
                    </div>
                </div>
            </div> -->

            <div class="row">
                <!-- ##### Progress Bars & Accordions ##### -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Thanh Toán</h2>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-9">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true" style="margin-bottom: 300px">
                        <!-- single accordian area -->
                        <!-- <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Donec ipsum metus, pharetr a quis nunc sit amet, maximus.
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div> -->
                        <!-- single accordian area -->
                        <!-- <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Maximus vehicula nibh. Prae sent pulvinar porta.
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div> -->
                        <!-- single accordian area -->
                        <!-- <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Pharetr a quis nunc sit amet, maximus vehicula nibh.
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel lectus eu felis semper finibus ac eget ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vulputate id justo quis facilisis.</p>
                            </div>
                        </div> -->
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="property-thumb">
                                <img src="{{ url('upload/bds/'.$bds->hinhanh) }}" onerror="this.src='{{ url('upload/Not-found.jpg') }}'" alt="{{ $bds->hinhanh }}">
                                <!-- <div class="tag">
                                    <span>{{ $bds->hinhthuc }}</span>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-8">
                            <h5>{{ $bds->ten_bds }}</h5>
                            <h4>{{ number_format($bds->gia) }} VND</h4>
                        </div>
                    </div>
                </div>

                <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-3">
                    {{--<div class="south-tabs-content">
                        <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Suspendisse dictu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Ero malesuada</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Ependisse dictu</a>
                            </li>
                        </ul> -->

                        <div class="tab-content mb-100" id="myTabContent">
                           <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="south-tab-content">
                                    <!-- Tab Text -->
                                    <div class="south-tab-text">
                                        <h6>Curabitur rhoncus auctor eleifend</h6>
                                        <p>Integer nec bibendum lacus. Praesent malesuada congue, Suspendisse dictum enim sit amet libero malesu ada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="south-tab-content">
                                    <!-- Tab Text -->
                                    <div class="south-tab-text">
                                        <h6>Curabitur rhoncus auctor eleifend</h6>
                                        <p>Integer nec bibendum lacus. Praesent malesuada congue, Suspendisse dictum enim sit amet libero malesu ada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="south-tab-content">
                                    <!-- Tab Text -->
                                    <div class="south-tab-text">
                                        <h6>Curabitur rhoncus auctor eleifend</h6>
                                        <p>Integer nec bibendum lacus. Praesent malesuada congue, Suspendisse dictum enim sit amet libero malesu ada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}
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
                        <form method="POST" action="{{ route('post.thanhtoan') }}" onsubmit="return validateForm()">
						{{ csrf_field() }}
                        @if(Auth::guard('customer')->check())
                            <input type="hidden" name="kh_id" id="kh_id" value="{{ Auth::guard('customer')->user()->id }}">
                        @else
                            <input type="hidden" name="kh_id" id="kh_id" value="">
                        @endif
                            <input type="hidden" name="bds_id" value="{{ $bds->id }}">
                            <input type="hidden" name="sotien" value="{{ $bds->gia }}">
                            <button class="btn south-btn m-1" style="width: 100%;" type="submit">Xác nhận thanh toán</button>
                        </form>
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
        function validateForm()
            {
                var kh_id = document.getElementById('kh_id').value;
                if (kh_id == '')
                {
                    alert('Vui lòng đăng nhập để thực hiện chức năng này');
                }
                else
                {
                    alert('Bạn đã đặt cọc thành công')
                    return true;
                }
                return false;
            }
    </script>
@endpush