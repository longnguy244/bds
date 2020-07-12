<div class="menu">
    <ul class="list">
        <li class="header">MENU</li>
        <li class="{{ $route=='home' ? 'active' : '' }}">
            <a href="{{ asset('admin/home') }}">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        <li class="{{ $route=='khachhang' || $route=='nhanvien' || $route=='nguoidung'? 'active' : '' }}">
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">people</i>
                <span>Người dùng</span>
            </a>
            <ul class="ml-menu">
                <li class="{{ $route=='nhanvien' ? 'active' : '' }}">
                    <a href="{{ asset('admin/staff') }}">
                        <span>Quản lý nhân viên</span>
                    </a>
                </li>
                <li class="{{ $route=='khachhang' ? 'active' : '' }}">
                    <a href="{{ asset('admin/customer') }}">
                        <span>Quản lý khách hàng</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ $route=='batdongsan' || $route=='motabds' || $route=='chusohuu'? 'active' : '' }}">
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">explore</i>
                <span>Bất động sản</span>
            </a>
            <ul class="ml-menu">
                <li class="{{ $route=='batdongsan' ? 'active' : '' }}">
                    <a href="{{ asset('admin/bds') }}">
                        <span>Quản lý bất động sản</span>
                    </a>
                </li>
                <li class="{{ $route=='chusohuu' ? 'active' : '' }}">
                    <a href="{{ route('get.list.chusohuu') }}">
                        <span>Quản lý chủ sở hữu</span>
                    </a>
                </li>
                <li class="{{ $route=='tieuchi' ? 'active' : '' }}">
                    <a href="{{ route('get.tieuchi.index') }}">
                        <span>Tiêu chí</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ $route=='chucvu' || $route=='loaibds'  || $route=='baiviet'? 'active' : '' }}">
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">bubble_chart</i>
                <span>Thể loại</span>
            </a>
            <ul class="ml-menu">
                <li class="{{ $route=='loaibds' ? 'active' : '' }}">
                    <a href="{{ asset('admin/loaibds') }}">
                        <span>Loại BĐS</span>
                    </a>
                </li>
                 <li class="{{ $route=='chucvu' ? 'active' : '' }}">
                    <a href="{{ asset('admin/position') }}">
                        <span>Chức vụ</span>
                    </a>
                </li>
                <li class="{{ $route=='baiviet' ? 'active' : '' }}">
                    <a href="{{ asset('admin/baiviet') }}">
                        <span>Bài viết</span>
                    </a>
                </li>
                <li class="{{ $route=='httt' ? 'active' : '' }}">
                    <a href="{{ route('get.hinhthucthanhtoan.index') }}">
                        <span>Hình thức thanh toán</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ $route=='thanhpho' || $route=='quanhuyen' || $route=='phuongxa'? 'active' : '' }}">
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">room</i>
                <span>Vị trí</span>
            </a>
            <ul class="ml-menu">
                <li class="{{ $route=='thanhpho' ? 'active' : '' }}">
                    <a href="{{ asset('admin/city') }}">
                        <span>Thành phố</span>
                    </a>
                </li>
                <li class="{{ $route=='quanhuyen' ? 'active' : '' }}">
                    <a href="{{ asset('admin/dist') }}">
                        <span>Quận - Huyện</span>
                    </a>
                </li>
                <li class="{{ $route=='phuongxa' ? 'active' : '' }}">
                    <a href="{{ asset('admin/ward') }}">
                        <span>Phường - Xã</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ $route=='hopdong' || $route=='bienbanhopdong'? 'active' : '' }}">
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">format_list_bulleted</i>
                <span>Hợp đồng</span>
            </a>
            <ul class="ml-menu">
                <li class="{{ $route=='hopdong' ? 'active' : '' }}">
                    <a href="{{ asset('admin/hopdong') }}">
                        <span>Hợp đồng</span>
                    </a>
                </li>
                <li class="{{ $route=='bienbanhopdong' ? 'active' : '' }}">
                    <a href="{{ asset('admin/bienbanhopdong') }}">
                        <span>Biên bản thanh lý hợp đồng</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ $route=='phieuthu' || $route=='phieuchi'? 'active' : '' }}">
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">attach_money</i>
                <span>Thu-Chi</span>
            </a>
            <ul class="ml-menu">
                <li class="{{ $route=='hoadon' ? 'active' : '' }}">
                    <a href="{{ route('get.hoadon.index') }}">
                        <span>Hóa đơn</span>
                    </a>
                </li>
                <li class="{{ $route=='phieuthu' ? 'active' : '' }}">
                    <a href="{{ asset('admin/phieuthu') }}">
                        <span>Phiếu thu</span>
                    </a>
                </li>
                <!-- <li class="{{ $route=='phieuchi' ? 'active' : '' }}">
                    <a href="{{ asset('admin/phieuchi') }}">
                        <span>Phiếu chi</span>
                    </a>
                </li> -->
            </ul>
        </li>
        <!-- <li class="{{ $route=='thang' || $route=='quy' || $route=='nam'? 'active' : '' }}">
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">insert_chart</i>
                <span>Thống kê</span>
            </a>
            <ul class="ml-menu">
                <li class="{{ $route=='nam' ? 'active' : '' }}">
                    <a href="{{ asset('admin/thongke/nam') }}">
                        <span>Theo năm</span>
                    </a>
                </li>
                <li class="{{ $route=='quy' ? 'active' : '' }}">
                    <a href="{{ asset('admin/thongke/quy') }}">
                        <span>Theo quý</span>
                    </a>
                </li>
                <li class="{{ $route=='thang' ? 'active' : '' }}">
                    <a href="{{ asset('admin/thongke/thang') }}">
                        <span>Theo tháng</span>
                    </a>
                </li>
            </ul>
        </li> -->
        <li class="{{ $route=='feedback' ? 'active' : '' }}">
            <a class="menu-toggle" href="javascript:void(0);">
                <i class="material-icons">loyalty</i>
                <span>Trợ giúp</span>
            </a>
            <ul class="ml-menu">
                {{-- <li class="{{ $route=='phieuthu' ? 'active' : '' }}">
                    <a href="{{ asset('admin/phieuthu') }}">
                        <span>Liên hệ</span>
                    </a>
                </li> --}}
                <li class="{{ $route=='feedback' ? 'active' : '' }}">
                    <a href="{{ route('get.feedback.index') }}">
                        <span>Phản hồi</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>