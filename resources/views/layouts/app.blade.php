<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="The dairy laboratory provides the following analysis on milk samples Standard Plate Count, Laboratory Pasteurization Count, freezing temperature for added water, Somatic Cell Count and antibiotic residue testing. Milk composition testing includes analysis for butterfat, protein and lactose.">
    <meta name="keywords"
    content="farm , Farm , Abomosa farm , eggs , chicken , abomosa farm , abomosa chicken , abomosa eggs , مزرعة دواجن , مزرعة ابو موسي , بيض اولاد ابو موسي , فراخ اولا ابو موسي"
        {{-- content="milk, cow, buffalo, dairy, milk sytem, abo mousa milk, milk lab, Ayman abo mousa, Awlad Abo mousa, milk recieve lab, cheese, cream, ghee, butter, ابو موسي, معمل ابو موسي, ايمن ابو موسى, اولاد ابوموسي للالبان, معمل اولاد ابو موسي, معمل ايمن ابو موسى, لبن بقري, لبن جاموس, لبن جاموسي, سمنة, زبدة, قشطة, نظام ادارة البان "> --}}
    <meta name="author" content="Reddington">
    <link href="{{ asset('assets/photos/logo.webp') }}" rel="icon">
    <link rel="shortcut icon" href="{{ asset('assets/photos/logo.webp') }}" type="image/x-icon">
    <title>{{ env('APP_NAME') }} @yield('title')</title>

    <!-- Google font-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,500;1,600;1,700;1,800;1,900&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/font-awesome.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css') }}">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    @stack('css')
</head>

<body class="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.body.classList.add('dark')
            window.addEventListener('load', () => {
                var dark_mode = document.getElementsByClassName('btn-dark-setting')[0];
                dark_mode.textContent = "Light";
                dark_mode.classList.add('dark')
            })
        } else {
            document.body.classList.remove('dark')
            window.addEventListener('load', () => {
                var dark_mode = document.getElementsByClassName('btn-dark-setting')[0];
                dark_mode.textContent = "Dark";
            })
        }

        function changeTheme(input) {
            input.classList.toggle('dark');
            document.body.classList.remove('dark');
            if (input.classList.contains('dark')) {
                input.textContent = "Light";
                document.body.classList.add('dark')
                localStorage.theme = 'dark'
            } else {
                input.textContent = "Dark";
                localStorage.theme = 'light'
            }
            return false;
        }
    </script>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        @if (Route::is('login'))
            @yield('content')
        @else
            <!-- Page Header Start-->
            @include('includes.header')
            <!-- Page Header Ends -->

            <!-- Page Body Start-->
            <div class="page-body-wrapper">

                <!-- Page Sidebar Start-->
                @include('includes.sidebar')
                <!-- Page Sidebar Ends-->

                <!-- Right sidebar Start-->
                @include('includes.right-sidebar')
                <!-- Right sidebar Ends-->

                @yield('content')

      

                <!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Elements -->
    <div class="container">
  
      <!--Grid row-->
      <div class="row">
  
        <!--Grid column-->
        <div class="col-lg-2 col-md-12 mb-4">
  
          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="{{asset('assets/images/egg1.jpg')}}" class="img-fluid"
              alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>
  
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">
  
          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="{{asset('assets/images/egg2.jpg')}}" class="img-fluid"
              alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>
  
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">
  
          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="{{asset('assets/images/egg3.jpg')}}" class="img-fluid"
            alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>
  
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-2 col-md-12 mb-4">
  
          <!--Image-->
          <div class="view overlay z-depth-1-half">
          
            <img src="{{asset('assets/images/egg4.jpg')}}" class="img-fluid"
            alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>
  
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">
  
          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="{{asset('assets/images/egg5.webp')}}" class="img-fluid"
              alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>
  
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">
  
          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="{{asset('assets/images/egg6.jpg')}}" class="img-fluid"
              alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>
  
        </div>
        <!--Grid column-->
  
      </div>
      <!--Grid row-->
  
    </div>
    <!-- Footer Elements -->
  
    <!-- Copyright -->
    <div class=" text-center" style="font-size: 18px">@lang('hometr.Farm Manger')
    
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
            </div>
        @endif
    </div>
    <ul class="custom-theme">
        <li class="btn-dark-setting" onclick="changeTheme(this)">Dark</li>
    </ul>

    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>

    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>

    <!--copycode js-->
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>

    <!--script admin-->
    <script src="{{ asset('assets/js/admin-script.js') }}"></script>
    <script src="{{ asset('js/milk.js') }}"></script>
    @stack('javascript')
</body>

</html>
