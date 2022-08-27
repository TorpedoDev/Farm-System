<div class="page-main-header">
    <div class="main-header-right row">
        <div class="main-header-left d-lg-none w-auto">
            <div class="logo-wrapper">
                <a href="#">
                    <img class="blur-up lazyloaded d-block d-lg-none"
                        src="{{ asset('assets/photos/logo.webp') }}" alt="">
                </a>
            </div>
        </div>
        <div class="mobile-sidebar w-auto">
            <div class="media-body text-end switch-sm">
                <label class="switch">
                    <a href="javascript:void(0)">
                        <i id="sidebar-toggle" data-feather="align-left"></i>
                    </a>
                </label>
            </div>
        </div>
        <div class="nav-right col">
            <ul class="nav-menus nav-top-links">
                <li style="width: auto;">
                    <a class="m-l-15" href="{{route('medicine.create')}}" target="blank"> @lang('hometr.Enter Medicine') </a>
                </li>
                <li>
                    <a class="m-l-15" href="{{route('eggsales.create')}}" target="blank"> @lang('hometr.Sell egg')</a>
                </li>
                <li>
                    <a class="m-l-15" href="{{route('feed.create')}}" target="blank"> @lang('hometr.Enter feed')
                    </a>
                </li>
                <li class="hide-on-sm">
                    <a href="{{route('cartoon.create')}}" target="blank">@lang('hometr.Enter cartoon')</a>
                </li>

                <li>
                    <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                        <i data-feather="maximize-2"></i>
                    </a>
                </li>
                <li class="onhover-dropdown">
                    <a class="txt-dark" href="javascript:void(0)">
                        <h6> {{ strtoupper(LaravelLocalization::getCurrentLocale()) }}</h6>
                    </a>
                    <ul class="language-dropdown onhover-show-div p-20">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" data-lng="{{ $localeCode }}">
                                <i class="flag-icon flag-icon-{{ config('flag.' . $localeCode) }}"></i>{{ $properties['native'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="onhover-dropdown">
                    <div class="media align-items-center">
                        <img class="align-self-center pull-right blur-up lazyloaded"
                            src="{{ asset('assets/images/dashboard/profile.jpeg') }}" width="40" alt="header-user">
                        <div class="dotted-animation">
                            <span class="animate-circle"></span>
                            <span class="main-circle"></span>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                        <li>
                            <a href="{{route('profiles.index')}}">
                                <i data-feather="user"></i> @lang('hometr.edit profile')
                            </a>
                        </li>
                        {{-- <li>
                            <a href="javascript:void(0)">
                                <i data-feather="settings"></i>Settings
                            </a>
                        </li> --}}
                        <li>
                            <form id="logout" action="{{route('logout')}}" method="POST">
                                @csrf
                            </form>
                            <a onclick="document.getElementById('logout').submit()" href="javascript:void(0)">
                                <i data-feather="log-out"></i>@lang('hometr.Logout')
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="d-lg-none mobile-toggle pull-right">
                <i data-feather="more-horizontal"></i>
            </div>
        </div>
    </div>
</div>
