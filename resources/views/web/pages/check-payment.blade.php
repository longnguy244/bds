@extends('web.layouts.base')

@section('title')
    Kiểm tra thông tin - DreamHouse
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
    <!-- <section class="breadcumb-area bg-img" style="background-image: url({{ asset('south/img/bg-img/hero4.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Thanh Toán</h3>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- ##### Progress Bars & Accordions ##### -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Thông tin người thanh toán</h2>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-9">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true" style="margin-bottom: 300px">
                        @foreach($bds as $val)
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="property-thumb">
                                <img src="{{ url('upload/bds/'.$val->hinhanh) }}" onerror="this.src='{{ url('upload/Not-found.jpg') }}'" alt="{{ $val->hinhanh }}">
                                <!-- <div class="tag">
                                    <span>{{ $val->hinhthuc }}</span>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-8">
                            <h5>{{ $val->ten_bds }}</h5>
                            <h4>{{ number_format($val->gia) }} VND</h4>
                        </div>   
                        @endforeach
                    </div>
                </div>

                <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-3">
                    <p>
                        <span>{{ $bds[0]->ten_bds }}</span>
                        <span style="float: right">{{ number_format($val->gia) }}đ</span>
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
                            <input type="hidden" name="bds_id" value="{{ $bds[0]->id }}">
                            <input type="hidden" name="sotien" value="{{ $bds[0]->gia }}">
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