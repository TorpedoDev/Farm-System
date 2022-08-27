<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="author" content="Reddington">

    <title>{{ env('APP_NAME') }}</title>
    <meta name="description"
        content="The dairy laboratory provides the following analysis on milk samples Standard Plate Count, Laboratory Pasteurization Count, freezing temperature for added water, Somatic Cell Count and antibiotic residue testing. Milk composition testing includes analysis for butterfat, protein and lactose.">
    <meta name="keywords"
        content="milk, cow, buffalo, dairy, milk sytem, abo mousa milk, milk lab, Ayman abo mousa, Awlad Abo mousa, milk recieve lab, cheese, cream, ghee, butter, ابو موسي, معمل ابو موسي, ايمن ابو موسى, اولاد ابوموسي للالبان, معمل اولاد ابو موسي, معمل ايمن ابو موسى, لبن بقري, لبن جاموس, لبن جاموسي, سمنة, زبدة, قشطة, نظام ادارة البان ">
    <!-- Favicons -->
    <link href="{{ asset('assets/photos/logo.webp') }}" rel="icon">
    <link href="{{ asset('assets/photos/logo.webp') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('welcome/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('welcome/assets/css/style.css') }}" rel="stylesheet">
    <style>
        @media (max-width: 767px){
            #header #logo img {
                width: 100px;
                height: 100px;
            }
        }
    </style>

</head>

<body class="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

    <!-- ======= Header ======= -->
    <header dir="ltr" id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div id="logo">
                <a href="{{ route('welcome') }}"><img src="{{ asset('assets/photos/logo.webp') }}" width="200"
                        height="150" alt="Logo"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    @auth
                        <li><a class="nav-link scrollto" href="{{ route('home') }}">@lang('hometr.home')</a></li>
                    @else
                        <li><a class="nav-link scrollto" href="{{ route('login') }}">@lang('hometr.Login')</a></li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1>@lang('hometr.Welcome to Farm')</h1>
            <h2>@lang('hometr.we have eggs')</h2>
            <h3 style="color: white">01050505525 - 01007145434</h3>
        </div>
    </section><!-- End Hero Section -->



    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <h4> @lang('hometr.Farm Manger') </h4>
            </div>
            <div class="credits">
                @lang('hometr.Developed by'): <a
                    class="{{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'ms-2' : 'me-2' }}"
                    href="https://www.facebook.com/mohammed.fayez.3382" target="blank">@lang('hometr.mf')</a> 
                    
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('welcome/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('welcome/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('welcome/assets/js/main.js') }}"></script>

</body>

</html>
