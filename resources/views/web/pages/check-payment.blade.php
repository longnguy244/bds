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
    <section class="breadcumb-area bg-img" style="background-image: url({{ asset('south/img/payments.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Kiểm tra thông tin thanh Toán</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- ##### Progress Bars & Accordions ##### -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Thông tin thanh Toán</h2>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <h4>THÔNG TIN KHÁCH HÀNG</h4>
                        <p> 
                            <span style="color: black"> Họ và tên: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->ten_kh }}</span>
                        </p>
                        <p> 
                            <span style="color: black"> Ngày sinh: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->ngaysinh_kh }}</span>
                        </p>
                        <p> 
                            <span style="color: black"> Địa chỉ: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->diachi_kh }}</span>
                        </p>
                        <p> 
                            <span style="color: black"> Điện thoại: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->phone_kh }}</span>
                        </p>
                        <p> 
                            <span style="color: black"> Email: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->email_kh }}</span>
                        </p>
                        <p> 
                            <span style="color: black"> Hộ khẩu: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->hokhau }}</span>
                        </p>
                        <p> 
                            <span style="color: black"> CMND/CCCD: </span>
                            <span style="float: right">{{ Auth::guard('customer')->user()->cmnd_kh }}</span>
                        </p>
                    </div>
                </div>

                <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-6">
                    <h4>THÔNG TIN BẤT ĐỘNG SẢN</h4>
                    <p> 
                        <span style="color: black"> Tên bất động sản: </span>
                        <span style="float: right">{{ $bds->ten_bds }}</span>
                    </p>
                    <p> 
                        <span style="color: black"> Địa chỉ: </span>
                        <span style="float: right">{{ $bds->diachi_bds }}</span>
                    </p>
                    <p> 
                        <span style="color: black"> Số CNQSDD: </span>
                        <span style="float: right">{{ $bds->soCNQSDD }}</span>
                    </p>
                    <p> 
                        <span style="color: black"> Hình thức: </span>
                        <span style="float: right">{{ $bds->hinhthuc }}</span>
                    </p>
                    <p> 
                        <span style="color: black"> Giá: </span>
                        <span style="float: right">{{ $bds->gia }}</span>
                    </p>
                </div>
                
                <div class="col-12 col-lg-9">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true" style="margin-bottom: 300px">
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="property-thumb">
                                <img src="{{ url('upload/bds/'.$bds->hinhanh) }}" onerror="this.src='{{ url('upload/Not-found.jpg') }}'" alt="{{ $bds->hinhanh }}">
                            </div>
                            <div class="col-12 col-md-6 col-xl-8">
                                <h5>{{ $bds->ten_bds }}</h5>
                                <h4>{{ number_format($bds->gia) }} VND</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
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
                        <form method="POST" action="{{ route('post.thanhtoan', $bds->id) }}" onsubmit="return validateForm()">
						{{ csrf_field() }}
                        @if(Auth::guard('customer')->check())
                            <input type="hidden" name="kh_id" id="kh_id" value="{{ Auth::guard('customer')->user()->id }}">
                        @else
                            <input type="hidden" name="kh_id" id="kh_id" value="">
                        @endif
                            <input type="hidden" name="bds_id" value="{{ $bds->id }}">
                            <input type="hidden" name="sotien" value="{{ $bds->gia }}">
                            <div id="paypal-button-container"></div>
                            <!-- <button class="btn south-btn m-1" style="width: 100%;" type="submit">Xác nhận thanh toán</button> -->
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
        paypal.Buttons({
            createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({
                    // redirect_urls:{
                    //     return_url:'/'
                    // },
                    purchase_units: [{
                    amount: {
                        value: '5'
                    }
                    }]
                });
            },
            onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {
                    // This function shows a transaction success message to your buyer.
                    alert('Cảm ơn ' + details.payer.name.given_name + ' đã đặt cọc. Nhân viên của chúng tôi sẽ sớm liên hệ đến quý khách');
                });
            }
        }).render('#paypal-button-container');
    </script>
@endpush