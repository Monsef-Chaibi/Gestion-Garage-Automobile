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
        <link rel="stylesheet" href="toasty.css" />
        <script src="toasty.js"></script>
        <!--===============================================================================================-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="  crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--===============================================================================================-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">
        <script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>
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

                <form class="login100-form" action="{{ route('login') }}" method="POST">
                    @csrf

                    <span class="login100-form-title">
                        User Login
                    </span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="login" placeholder="Email or Username" required autofocus>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password" required>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>

                    <div class="mt-[10px]">
                        <input type="checkbox" class="ml-[1.7rem] text-[13px]" name="remember" id="Remember-Me">
                        <label for="Remember-Me" class="font-[Poppins-Regular] text-[13px] text-gray-500">Remember Me</label>
                    </div>


                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="">
                            Password?
                        </a>
                    </div>

                    <div class="text-center pt-[100px]">
                        <a class="txt2" href="{{ route('register') }}" id="signup-link">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5"></i>
                        </a>
                    </div>
                </form>
			</div>
			<div class="wrap-login100 pt-[44px] hidden" id="signup-form" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;">
				<div class="login100-pic js-tilt mt-[90px]" data-tilt>
					<img  src="{{ asset('Login-Template/images/img-01.png') }}" alt="IMG">
				</div>

                <form class="login100-form" action="{{ route('register') }}" method="POST">
                    @csrf

					<span class="login100-form-title">
						User Sin up
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" ></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="Username" placeholder="Username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa-solid fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="Address" placeholder="Address" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                            <i class="fa-solid fa-location-dot"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Phone" placeholder="Phone" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                            <i class="fa-solid fa-phone"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" ></i>
						</span>
					</div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">Sign Up</button>
                    </div>

					<div class="text-center pt-[65px]">
						<a class="txt2" id="signin-link" href="#">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5" ></i>
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

@if(session('customError'))
    <script>
    iziToast.error({
        title: 'Error',
        message: '{{ session('customError') }}',
        position: 'topRight',
        timeout: 2500 ,
                    });
    </script>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const loginForm = document.getElementById('login-form');
        const signupForm = document.getElementById('signup-form');
        const signupLink = document.getElementById('signup-link');
        const signinLink = document.getElementById('signin-link');

        // Check for session variable and show sign-up form if set
        @if(session('showSignUpForm'))
            loginForm.classList.add('hidden');
            signupForm.classList.remove('hidden');
        @endif

        signupLink.addEventListener('click', function(e) {
            e.preventDefault();
            loginForm.classList.add('hidden');
            signupForm.classList.remove('hidden');
        });

        signinLink.addEventListener('click', function(e) {
            e.preventDefault();
            signupForm.classList.add('hidden');
            loginForm.classList.remove('hidden');
        });
    });
    </script>



</html>

</script>
