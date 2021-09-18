<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/frontend/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/frontend/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/frontend/css/util.css">
    <link rel="stylesheet" type="text/css" href="/frontend/css/main.css">
    <!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form role="form" action="{{ route('admin.postLogin') }}" method="post" class="login100-form validate-form">
                @csrf
					<span class="login100-form-title p-b-43">
						WEBSHOP
					</span>


                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    @if ($errors->has('email'))
                        <span class="label-input100">{{ $errors->first('email') }}</span>
                    @endif
                </div>


                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" name="password" type="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    @if ($errors->has('password'))
                        <span class="label-input100">{{ $errors->first('password') }}</span>
                    @endif

                </div>
                @if (session('msg'))
                    <div><a href="#" style="color: red">{{ session('msg') }}</a></div>
                @endif

                <div class="flex-sb-m w-full p-t-3 p-b-32">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Nhớ mật khẩu
                        </label>
                    </div>

                    <div>
                        <a href="/frontend/#" class="txt1">
                            Quên mật khẩu?
                        </a>
                    </div>
                </div>


                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Đăng nhập
                    </button>
                </div>

                <div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Hoặc
						</span>
                </div>

                <div class="login100-form-social flex-c-m">
                    <a href="/frontend/#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                        <i class="fa fa-facebook-f" aria-hidden="true"></i>
                    </a>

                    <a href="/frontend/#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('/frontend/images/bg-01.jpg');">
            </div>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src="/frontend/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/frontend/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/frontend/vendor/bootstrap/js/popper.js"></script>
<script src="/frontend/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/frontend/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/frontend/vendor/daterangepicker/moment.min.js"></script>
<script src="/frontend/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/frontend/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/frontend/js/main.js"></script>

</body>
</html>
