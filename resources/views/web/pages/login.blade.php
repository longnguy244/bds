<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
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
				<form class="login100-form validate-form" method="POST" action="{{ asset('dangnhap') }}" aria-label="{{ __('Login') }}">
				{{ csrf_field() }}
					<a href="{{ asset('/') }}">
						<span class="login100-form-logo">
							<!-- <i class="zmdi zmdi-landscape"></i> -->
							<img style="width: 100px" src="{{ asset('south/img/core-img/logo.png') }}" alt="">
						</span>
					</a>
					<span class="login100-form-title p-b-34 p-t-27">
						Đăng nhập
					</span>

					@if(session('message'))
					<p style="color: #eccd35; text-align: center; font-size: 16px;">{{ session('message') }}</p>
					@endif

					<div class="wrap-input100 validate-input" data-validate = "Nhập email">
						<input class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email_kh" id="email_kh" placeholder="Email" value="{{ old('email_kh') }}">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					
                    <!-- @if ($errors->has('email_kh'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email_kh') }}</strong>
                        </span>
                    @endif -->

					<div class="wrap-input100 validate-input" data-validate="Nhập mật khẩu">
						<input class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" id="password" placeholder="Mật khẩu">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!-- @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif -->

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" {{ old('remember') ? 'checked' : '' }}>
						<label class="label-checkbox100" for="ckb1">
							Ghi nhớ
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Đăng nhập
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="{{ asset('dangky') }}">
							Chưa có tài khoản?
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