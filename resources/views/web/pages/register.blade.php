<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Đăng kí</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="{{ asset('south/img/core-img/favicon.ico') }}"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{ asset('loginV3/vendor/bootstrap/css/bootstrap.min.css') }}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{ asset('loginV3/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{ asset('loginV3/fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{ asset('loginV3/vendor/animate/animate.css') }}">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="{{ asset('loginV3/vendor/css-hamburgers/hamburgers.min.css') }}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{ asset('loginV3/vendor/animsition/css/animsition.min.css') }}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{ asset('loginV3/vendor/select2/select2.min.css') }}">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="{{ asset('loginV3/vendor/daterangepicker/daterangepicker.css') }}">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="{{ asset('loginV3/css/util.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('loginV3/css/main.css') }}">
	<!--===============================================================================================-->
	</head>
	<body>

		<div class="limiter">
			<div class="container-login100" style="background-image: url('{{ asset('loginV3/images/bg-01.jpg') }}');">
				<div class="wrap-login100">
					<form class="login100-form validate-form" method="POST" action="{{ asset('dangky') }}">
						{{ csrf_field() }}
						
						<a href="{{ asset('/') }}">
							<span class="login100-form-logo">
								<!-- <i class="zmdi zmdi-landscape"></i> -->
								<img style="width: 100px" src="{{ asset('south/img/core-img/logo.png') }}" alt="">
							</span>
						</a>

						<span class="login100-form-title p-b-34 p-t-27">
							Đăng ký thành viên
						</span>

						<div class="wrap-input100 validate-input" data-validate = "Nhập tên">
							<input class="input100" type="text" name="ten_kh" id="ten_kh" placeholder="Họ tên" value="{{ old('ten_kh') }}">
							<span class="focus-input100" data-placeholder="&#xf20e;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Nhập email">
							<input class="input100" type="text" name="email_kh" id="email_kh" placeholder="Email" value="{{ old('email_kh') }}">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Nhập mật khẩu">
							<input class="input100" type="password" name="password" id="password" placeholder="Mật khẩu" value="{{ old('password') }}">
							<span class="focus-input100" data-placeholder="&#xf191;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Nhập ngày sinh">
							<input class="input100" type="date" name="ngaysinh_kh" id="ngaysinh_kh" placeholder="Ngày sinh" value="{{ old('ngaysinh_kh') }}">
							<span class="focus-input100" data-placeholder="&#xf332;"></span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate="Nhập số điện thoại">
							<input class="input100" type="number" name="phone_kh" id="phone_kh" placeholder="Số điện thoại" value="{{ old('phone_kh') }}">
							<span class="focus-input100" data-placeholder="&#xf2be;"></span>
						</div>
						
						<div class="wrap-input100 validate-input" data-validate="Nhập địa chỉ">
							<input class="input100" type="text" name="diachi_kh" id="diachi_kh" placeholder="Địa chỉ" value="{{ old('diachi_kh') }}">
							<span class="focus-input100" data-placeholder="&#xf175;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Nhập hộ khẩu">
							<input class="input100" type="text" name="hokhau" id="hokhau" placeholder="Hộ khẩu" value="{{ old('hokhau') }}">
							<span class="focus-input100" data-placeholder="&#xf20a;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Nhập chứng minh nhân dân">
							<input class="input100" type="text" name="cmnd_kh" id="cmnd_kh" placeholder="Chứng minh nhân dân" value="{{ old('cmnd_kh') }}">
							<span class="focus-input100" data-placeholder="&#xf205;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Nhập ngày cấp">
							<input class="input100" type="date" name="ngaycap_kh" id="ngaycap_kh" placeholder="Ngày cấp" value="{{ old('ngaycap_kh') }}">
							<span class="focus-input100" data-placeholder="&#xf32f;"></span>
						</div>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn" type="submit">
								Đăng ký
							</button>
						</div>

						<div class="text-center p-t-90">
							<a class="txt1" href="{{ asset('dangnhap') }}">
								Bạn đã có tài khoản?
							</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>
		
		
	<!--===============================================================================================-->
		<script src="{{ asset('loginV3/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<!--===============================================================================================-->
		<script src="{{ asset('loginV3/vendor/animsition/js/animsition.min.js') }}"></script>
	<!--===============================================================================================-->
		<script src="{{ asset('loginV3/vendor/bootstrap/js/popper.js') }}"></script>
		<script src="{{ asset('loginV3/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--===============================================================================================-->
		<script src="{{ asset('loginV3/vendor/select2/select2.min.js') }}"></script>
	<!--===============================================================================================-->
		<script src="{{ asset('loginV3/vendor/daterangepicker/moment.min.js') }}"></script>
		<script src="{{ asset('loginV3/vendor/daterangepicker/daterangepicker.js') }}"></script>
	<!--===============================================================================================-->
		<script src="{{ asset('loginV3/vendor/countdowntime/countdowntime.js') }}"></script>
	<!--===============================================================================================-->
		<script src="{{ asset('loginV3/js/main.js') }}"></script>

	</body>
</html>