<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>SIMONCER - Intro</title>
    <!-- Logo icon -->
    <link rel="icon" href="{{ asset('assets/static/logo/icon-base.png') }}">

    <!-- CSS files -->
    <link href="{{asset('assets/dist/css/tabler.min.css')}}" rel="stylesheet"/>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gothic+A1:wght@100;200;300;400;500;600&family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Gothic A1', sans-serif;
        }

        .page-wrapper {
            filter: brightness(60%);
        }

        .header-custome {
            background-color: #ffffff41;
            box-shadow: 1px 2px 6px rgba(0, 0, 0, 0.384);
        }

        .navbar-brand img{
            width: 190px;
            height: 60px;
        }

        .nav-link img{
            width: 35px;
            height: 35px;
        }
        .nav-link span {
            display: block;
            color: #ffffff;
            font-size: 16px;
        }

        .navbar .navbar-nav .nav-link {
            display: block;
            text-align: center;
        }

        /* Footer */
        .container-custome {
            padding-left: 2rem;
            padding-right: 2rem;
        }
        a.footer-link {
            text-decoration: none;
        }
        .bg-green__custome {
            background-color: #009b4d;
        }
        .footer-icon {
            width: 60px;
            height: 60px;
        }
        .footer-title {
            display: block;
            font-size: 24px;
            color: #ffffff;
            font-weight: 600;
        }
        .footer-sub-title {
            font-size: 16px;
            color: #ffffff;
        }

        /* Center information */
        .center-information {
            position: absolute;
            top: 0;
            left: 32.333%;
            width: 33.33333%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.308);
            z-index: 9999;
        }

        .center-information-content {
            display: flex;
            justify-content: center;
            padding-top: 30%;
        }

        .center-information-content-title {
            text-align: center;
        }

        .center-information-content-title .welcome{
            font-weight: 200;
            font-size: 18px;
            color: #ffffff;
            display: block;
            letter-spacing: 1.2px;
            margin-bottom: .3rem;
        }
        .center-information-content-title .name {
            font-size: 20px;
            color: orange;
            font-weight: 600;
            display: block;
            margin-bottom: .3rem;
        }

        .center-information-content-title .admin {
            font-size: 20px;
            color: #ffffff;
            font-weight: 600;
            display: block;
            margin-bottom: .3rem;
        }
        .center-information-content-title .app {
            font-size: 20px;
            color: #ffffff;
            font-weight: 600;
            display: block;
            margin-bottom: .3rem;
        }
        .center-information-content-title .good-day {
            letter-spacing: 1.2px;
            font-size: 16px;
            color: #ffffff;
            display: block;
            margin-bottom: 3rem;
        }

        #clock {
            font-size: 36px;
            font-weight: 600;
            color: #ffffff;
        }

        #date {
            font-size: 16px;
            color: #ffffff;
        }
    </style>

  </head>
  <body>
    <div class="page">
        <nav class="navbar navbar-expand-lg bg-nav header-custome fixed-top">
            <div class="container-fluid d-flex justify-content-between">
                <a class="navbar-brand" href="{{ route('login') }}">
                    <img src="{{ asset('assets/static/logo/logo-white.png') }}" alt="">
                </a>
                <div class="">
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item me-2">
                            <a class="nav-link" href="{{ route('login') }}">
                                <img src="{{ asset('assets/icon/login/logout.png') }}" alt="">
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="page-wrapper" style="background-image: url({{ asset('assets/images/intro/intro-bg.avif') }}); background-size: cover;background-repeat: no-repeat">

        </div>
        <div class="center-information">
            <div class="center-information-content">
                <div class="center-information-content-title">
                    <span class="welcome">Selamat datang</span>
                    <span class="name">LUNA MAYA</span>
                    <span class="admin">ADMIN</span>
                    <span class="app">SIMONCER</span>
                    <span class="good-day">Semoga hari Anda menyenangkan</span>
                    <div id="clock"></div>
                    <div id="date"></div>
                </div>
            </div>
        </div>
        <footer class="footer footer-transparent bg-green__custome d-print-none">
            <div class="container-custome">
                <div class="row">
                    <div class="col-md-4 text-start">
                        <a href="" class="footer-link">
                            <div class="d-flex">
                                <div class="me-3">
                                    <img src="{{ asset('assets/icon/login/my-account.png') }}" alt="" class="footer-icon">
                                </div>
                                <div>
                                    <span class="footer-title">MY ACCOUNT</span>
                                    <span class="footer-sub-title">Informasi tentang personal data dan akses sistem</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="position: relative; z-index:99999;">
                        <a href="{{ route('dashboard') }}" class="footer-link">
                            <div class="d-flex">
                                <div class="me-3">
                                    <img src="{{ asset('assets/icon/login/go-to-app.png') }}" alt="" class="footer-icon">
                                </div>
                                <div>
                                    <span class="footer-title">GO TO APLIKASI</span>
                                    <span class="footer-sub-title">
                                        Pergi ke aplikasi untuk menggunakan seluruh layanan
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="" class="footer-link">
                            <div class="d-flex">
                                <div class="me-3">
                                    <img src="{{ asset('assets/icon/login/info.png') }}" alt="" class="footer-icon">
                                </div>
                                <div>
                                    <span class="footer-title">INFO APLIKASI</span>
                                    <span class="footer-sub-title">
                                        Merupakan informasi tentang aplikasi SIMONCER
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Tabler Core -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script src="{{asset('assets/dist/js/tabler.min.js')}}" defer></script>
    <script type='text/javascript'>
        $(document).ready(function() {
            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth();
            var thisDay = date.getDay(),
                thisDay = myDays[thisDay];
            var yy = date.getYear();
            var year = (yy < 1000) ? yy + 1900 : yy;

            $("#date").html(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
        });

    </script>
    <script type="text/javascript">
        function showTime() {
            var a_p = "";
            var today = new Date();
            var curr_hour = today.getHours();
            var curr_minute = today.getMinutes();
            var curr_second = today.getSeconds();
            if (curr_hour < 12) {
                a_p = "AM";
            } else {
                a_p = "PM";
            }
            if (curr_hour == 0) {
                curr_hour = 12;
            }
            if (curr_hour > 12) {
                curr_hour = curr_hour - 12;
            }
            curr_hour = checkTime(curr_hour);
            curr_minute = checkTime(curr_minute);
            curr_second = checkTime(curr_second);
            document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
        setInterval(showTime, 500);
        //-->
    </script>
  </body>
</html>
