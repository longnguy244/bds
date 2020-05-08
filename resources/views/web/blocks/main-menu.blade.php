<div class="classy-menu">

    <!-- close btn -->
    <div class="classycloseIcon">
        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
    </div>
    <!-- Nav Start -->
    <div class="classynav">
        <ul>
            <li><a href="{{ asset('/') }}">Trang chủ</a></li>
            <!-- <li><a href="#">Pages</a>
                <ul class="dropdown">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="#">Listings</a>
                        <ul class="dropdown">
                            <li><a href="listings.html">Listings</a></li>
                            <li><a href="single-listings.html">Single Listings</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a>
                        <ul class="dropdown">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="single-blog.html">Single Blog</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="elements.html">Elements</a></li>
                </ul>
            </li> -->
            <li><a href="{{ asset('/vechungtoi') }}">Về chúng tôi</a></li>
            <li><a href="{{ asset('/batdongsan') }}">Bất động sản</a></li>
            <li><a href="{{ asset('/baiviet') }}">Bài viết</a></li>
{{--        <li><a href="{{ asset('/lienhe') }}">Liên hệ</a></li>
 --}}       <li><a href="{{ route('web.phanhoi') }}">Phản hồi</a></li>
            @if (Auth::guard('customer')->check())
            <li class="login">
                <a href="#">
                    Xin chào, {{ Auth::guard('customer')->user()->ten_kh }}
                </a>
                <ul class="dropdown" style="width: 105px; border-radius: 5px; background-color: rgba(255,255,255,.5); margin: 4px;">
                    <a href="{{ route('dangxuat') }}" 
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Đăng xuất') }}
                    </a>
                </ul>
            </li>         
            <form id="logout-form" action="{{ route('dangxuat') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @else
                <li class="login"><a href="{{ asset('/dangnhap') }}">Đăng nhập</a></li>
            @endif
        </ul>

        <!-- Search Form -->
        <div class="south-search-form">
            <form action="#" method="post">
                <input type="search" name="search" id="search" placeholder="Search Anything ...">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>

        <!-- Search Button -->
        <!-- <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a> -->
    </div>
    <!-- Nav End -->
</div>