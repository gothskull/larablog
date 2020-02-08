<!DOCTYPE html>
<html lang="en">

    <!-- begin::Head -->
    <head>
        <base href="../../../">
        <meta charset="utf-8" />
        <title>Metronic | Login Page 6</title>
        <meta name="description" content="Login page example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

        <!--end::Fonts -->

        <!--begin::Page Custom Styles(used by this page) -->
        <link href="admin/assets/css/pages/login/login-6.css" rel="stylesheet" type="text/css" />

        <!--end::Page Custom Styles -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="admin/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="admin/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->

        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="admin/assets/media/logos/favicon.ico" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

        <!-- begin:: Page -->
        <div class="kt-grid kt-grid--ver kt-grid--root kt-page">
            <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v6 kt-login--signin" id="kt_login">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
                    <div class="kt-grid__item  kt-grid__item--order-tablet-and-mobile-2  kt-grid kt-grid--hor kt-login__aside">
                        <div class="kt-login__wrapper">
                            <div class="kt-login__container">
                                <div class="kt-login__body">
                                    <div class="kt-login__logo">
                                        <a href="#">
                                            <img src="admin/assets/media/company-logos/logo-2.png">
                                        </a>
                                    </div>
                                    <div class="kt-login__signin">
                                        <div class="kt-login__head">
                                            <h3 class="kt-login__title">Formulario de ingreso</h3>
                                        </div>
                                        <div class="kt-login__form">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  autofocus>

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <input id="password" type="password" class="form-control-last form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Contraseña') }}">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="kt-login__extra">
                                                    <label class="kt-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        Recuerdame
                                                        <span></span>
                                                    </label>
                                                    <a href="javascript:;" id="kt_login_forgot">Olvide mi contraseña ?</a>
                                                </div>
                                                <div class="kt-login__actions">
                                                    <button id="kt_login_signin_submit" class="btn btn-brand btn-pill btn-elevate" >Ingresar</button>


                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    <div class="kt-login__forgot">
                                        <div class="kt-login__head">
                                            <h3 class="kt-login__title">Olvidaste tu contraseña? </h3>
                                            <div class="kt-login__desc">Ingresa tu correo electronico para recuperarla:</div>
                                        </div>
                                        <div class="kt-login__form">
                                            <form class="kt-form" action="">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                                                </div>
                                                <div class="kt-login__actions">
                                                    <button id="kt_login_forgot_submit" class="btn btn-brand btn-pill btn-elevate">Request</button>

                                                    <button id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           {{--  <div class="kt-login__account">
                                <span class="kt-login__account-msg">
                                    Don't have an account yet ?
                                </span>&nbsp;&nbsp;
                                <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Sign Up!</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="kt-grid__item kt-grid__item--fluid kt-grid__item--center kt-grid kt-grid--ver kt-login__content" style="background-image: url(admin/assets/media/bg/bg-4.jpg);">
                        <div class="kt-login__section">
                            <div class="kt-login__block">
                                <h3 class="kt-login__title">Join Our Community</h3>
                                <div class="kt-login__desc">
                                    Lorem ipsum dolor sit amet, coectetuer adipiscing
                                    <br>elit sed diam nonummy et nibh euismod
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Page -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#22b9ff",
                        "light": "#ffffff",
                        "dark": "#282a3c",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995"
                    },
                    "base": {
                        "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                        "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                    }
                }
            };
        </script>

        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="admin/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
        <script src="admin/assets/js/scripts.bundle.js" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->

        <!--begin::Page Scripts(used by this page) -->
        {{-- <script src="admin/assets/js/pages/custom/login/login-general.js" type="text/javascript"></script> --}}

        <!--end::Page Scripts -->
    </body>

    <!-- end::Body -->
</html>