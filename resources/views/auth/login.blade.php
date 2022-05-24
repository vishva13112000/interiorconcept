<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Interior Concept">
    <meta name="keywords" content="Interior Concept">
    <meta name="author" content="DG Solutions">
    <title>Interior Concept</title>
    <link rel="apple-touch-icon" href="{{ asset('asset/admin/app-assets/images/ico/title_favicon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('asset/admin/app-assets/images/ico/title_favicon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin/app-assets/vendors/css/material-vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin/app-assets/vendors/css/forms/icheck/icheck.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin/app-assets/vendors/css/forms/icheck/custom.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin/app-assets/css/material.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin/app-assets/css/material-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin/app-assets/css/material-colors.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin/app-assets/css/core/menu/menu-types/material-vertical-compact-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin/app-assets/css/core/colors/material-palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin/app-assets/fonts/mobiriseicons/24px/mobirise/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin/app-assets/css/pages/login-register.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/admin/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-compact-menu material-vertical-layout material-layout 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-compact-menu" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-header row">
        </div>
        <div class="content-wrapper">
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <img src="{{ asset('asset/admin/app-assets/images/logo/jmlogo.png') }}" alt="Interior Concept">
                                    </div>
                                    <!-- <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6> -->
                                </div>
                                <div class="card-content">
                                    <!-- <div class="text-center">
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="la la-facebook"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="la la-twitter"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span class="la la-linkedin font-medium-4"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span class="la la-github font-medium-4"></span></a>
                                    </div> -->
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Log In</span></p>
                                    <div class="card-body">
                                        <form class="form-horizontal" method="POST" action="{{ route('login') }}" novalidate>
                                          @csrf
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your Email" autocomplete="email" required autofocus>
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" autocomplete="current-password" required>
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                                    <fieldset>
                                                        <input type="checkbox" id="remember" name="remember" class="chk-remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label for="remember"> Remember Me</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right">
                                                <!-- @if (Route::has('password.request'))
                                                    <a class="card-link" href="{{ route('password.request') }}">Forgot Password?</a>
                                                @endif -->
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
                                        </form>
                                    </div>
                                    <!-- <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>New to Modern ?</span></p> -->
                                    <!-- <div class="card-body">
                                        <a href="register-with-bg-image.html" class="btn btn-outline-danger btn-block"><i class="ft-user"></i> Register</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('asset/admin/app-assets/vendors/js/material-vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('asset/admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('asset/admin/app-assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('asset/admin/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('asset/admin/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('asset/admin/app-assets/js/scripts/pages/material-app.js') }}"></script>
    <script src="{{ asset('asset/admin/app-assets/js/scripts/forms/form-login-register.js') }}"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
