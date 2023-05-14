{{--<html>--}}
{{--<title>Show Users</title>--}}

{{--<title>User Register</title>--}}

{{--<body style="background: orange">--}}
{{--<h3>User Register Form</h3>--}}

{{--@if(session('registerSuccess'))--}}
    {{--<p style="color:blue;">{{ session('registerSuccess') }}</p>--}}
{{--@endif--}}

{{--<form action="{{ route('user.register') }}" method="post" enctype="multipart/form-data">--}}
    {{--{{ csrf_field() }}--}}

    {{--<input type="text" name="username" placeholder="UserName"><br>--}}
    {{--<input type="text" name="email" placeholder="Email"><br>--}}
    {{--<input type="password" name="password" placeholder="Password"><br>--}}
    {{--<input type="password" name="password_confirmation" placeholder="Confirm Password"><br>--}}
    {{--<input type="file" name="image" accept="image/jpeg"><br>--}}
    {{--<input type="submit" name="submit" value="Register">--}}



{{--</form>--}}

{{--<p>Already Registered?</p><a href="{{ route('user.login') }}"><input type="submit" name="submit" value="Go to Login"></a>--}}
{{--</body>--}}
{{--</html>--}}


<!DOCTYPE html>
<html lang="en">
<head>
    <title>ORBIT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    {{--<div class="container-login100" style="background-image: url('image/bg-01.jpg');">--}}
        <div class="container-login100" style="background-image: url('image/orbit.jpeg');">
        <div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					{{--User Register--}}
				</span>
            @if(session('registerSuccess'))
            <p style="color:blue;">{{ session('registerSuccess') }}</p>
            @endif
            @include('errors.error')
            <form action="{{ route('user.register') }}" method="POST" class="login100-form validate-form p-b-33 p-t-5">
                {{ csrf_field() }}


                <div class="wrap-input100 validate-input" data-validate = "username">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "email">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="password_confirmation">
                    <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                <div class="container-login100-form-btn m-t-32">
                    <button class="login100-form-btn">
                        Register
                    </button>
                </div>

                <div class="container-login100-form-btn m-t-32">
                    <p>    Already Registered In System?
                    <a href="{{ route('user.login') }}" button  class="login100-form-btn">
                        Login
                        </button>
                    </a></p>
                </div>


            </form>

        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{{asset('js/main.js')}}"></script>

@include('layouts.footer')
</body>
</html>