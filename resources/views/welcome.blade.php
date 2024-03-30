<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href=""/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('Login-Template/vendor/bootstrap/css/bootstrap.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('Login-Template/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('Login-Template/vendor/animate/animate.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('Login-Template/vendor/css-hamburgers/hamburgers.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('Login-Template/vendor/select2/select2.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('Login-Template/css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('Login-Template/css/main.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="  crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--===============================================================================================-->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 " id="login-form" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
				<div class="login100-pic js-tilt" data-tilt>
					<img  src="{{ asset('Login-Template/images/img-01.png') }}" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						User Login
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2"  id="signup-link" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
			<div class="wrap-login100 pt-[44px] hidden" id="signup-form" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
				<div class="login100-pic js-tilt mt-[90px]" data-tilt>
					<img  src="{{ asset('Login-Template/images/img-01.png') }}" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						User Sin up
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="Username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa-solid fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="Address" placeholder="Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                            <i class="fa-solid fa-location-dot"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Phone" placeholder="Phone">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                            <i class="fa-solid fa-phone"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center pt-[65px]">
						<a class="txt2" id="signin-link" href="#">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
<script src="{{ asset('Login-Template/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('Login-Template/vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('Login-Template/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('Login-Template/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('Login-Template/vendor/tilt/tilt.jquery.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.js-tilt').tilt({
            scale: 1.1
        });
    });
</script>
<!--===============================================================================================-->
<script src="{{ asset('Login-Template/js/main.js') }}"></script>


</body>
</html>
