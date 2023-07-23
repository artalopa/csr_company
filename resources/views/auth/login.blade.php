<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>

    <meta name="author" content="ASTROCLOUD">
    <meta name="description" content="SIMONCER APPLICATION - LOGIN">

    <meta property="og:title" content="SIMONCER APPLICATION" />
    <meta property="og:url" content="https://technoshare.my.id" />
    <meta property="og:image" content="{{ asset('assets/static/logo/icon-base.png') }}" />
    <title>SIMONCER - Login</title>
    <!-- Logo icon -->
    <link rel="icon" href="{{ asset('assets/static/logo/icon-base.png') }}">

    <!-- CSS files -->
    <link href="{{asset('assets/dist/css/tabler.min.css')}}" rel="stylesheet"/>

    <style>
        .container-fluid {
            padding: 5% 20%;
        }
        .card-login {
            border: none;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            box-shadow: 1px 2px 10px black;
        }

        .logo-content {
            position: relative;
            width: 100%;
            height: 430px;
        }

        .logo-content .logo-bg{
            width: 100%;
            height: 100%;
            filter: brightness(40%);
        }

        .logo-sub-content {
            position: absolute;
            width: 100%;
            top: 20%;
            padding: 5%;
        }

        .logo-description {
            font-size: 20px;
            color: #ffffff;
        }
        .login-form-title {
            margin-bottom: 2rem;
        }

        .login-form-title .login-form-title-heading {
            display: block;
            font-size: 30px;
            font-weight: 700;
            color: #414141;
        }

        .form-label__green {
            color: #00a85a;
            font-style: italic;
        }

        .form-control__b-0 {
            border-top: 0;
            border-right: 0;
            border-left: 0;
            border-radius: 0;
            border-bottom-color: #0a0a0ac4;
            padding: .5rem 0;
        }

        .form-control__b-0:focus {
            color: inherit;
            background-color: #ffffff;
            border-color: #00000098;
            box-shadow: none;
        }

        .forget-password {
            display: flex;
            justify-content: end;
            color: rgb(255, 60, 0);
        }

        .btn-login {
            background-color: #00a85a;
            border: 0;
            color: #ffffff;
            border-radius: 20px;
            padding: .5rem 2.5rem;
            box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.486);
        }

        .btn-login:hover {
            color: white;
            border: 0;
            transform: scale(1.02);
        }
    </style>

  </head>
  <body>
    <div class="page">
        <div class="page-wrapper" style="background-image: url({{ asset('assets/images/login/bg-2.jpg') }}); background-size: cover;background-repeat: no-repeat">
            <div class="container-fluid">
                <div class="page-body">
                    <div class="card card-login">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="logo-content">
                                    <img src="{{ asset('assets/images/login/bg-1.png') }}" alt="" class="logo-bg">
                                    <div class="logo-sub-content">
                                        <div class="logo-img mb-4">
                                            <img src="{{ asset('assets/static/logo/logo-white.png') }}" alt="">
                                        </div>
                                        <div class="logo-description">
                                            <span>Creating a strong business, and building a better world</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <form action="{{ route('intro') }}" method="GET">
                                        <div class="login-form-title">
                                            <span class="login-form-title-heading">LOGIN</span>
                                            <span style="color: #414141;">Enter your username and password to be able to log in to the SIMONCER Application.</span>
                                        </div>
                                        <div class="mb-4">
                                            <label class="form-label__green">Enter your username to login to the application <span>*</span></label>
                                            <input type="text" class="form-control form-control__b-0" placeholder="Username" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label__green">Enter your password to login to the application <span>*</span></label>
                                            <input type="password" class="form-control form-control__b-0" placeholder="Password" required>
                                            <a href="" class="forget-password">
                                                <small>Forget Password</small>
                                            </a>
                                        </div>
                                        <div class="mb-4">
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-login">LOGIN</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabler Core -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script src="{{asset('assets/dist/js/tabler.min.js')}}" defer></script>

    @yield('js')
  </body>
</html>
