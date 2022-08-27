<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper">
            <div style="color: #20b8bf; font-weight:bold">
                {{ env('APP_NAME', 'Laravel') }}
            </div>
        </div>
    </div>
    <div class="sidebar custom-scrollbar">
        <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                aria-hidden="true"></i></a>
        <div class="sidebar-user">
            <img src="{{ asset('assets/photos/logo.webp') }}" alt="logo" width="100" height="100">
            <div>
                <h6 class="f-14">{{ Auth::user()->name }}</h6>
                {{-- <p>{{ __('Rmilk.' . Auth::user()->getRoleNames()[0]) }}</p> --}}
            </div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a class="sidebar-header" href="{{ route('home') }}">
                    <i data-feather="home"></i>
                    <span>@lang('hometr.Dashboard')</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteNamed('chicken.*') ? 'active' : '' }}">
                {{--  --}}
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>@lang('hometr.Inner chicken')</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('chicken.index') }}" class="{{ Route::is('chicken.index') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Show chicken')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('chicken.create') }}"
                            class="{{ Route::is('chicken.create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Enter chicken')</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Route::currentRouteNamed('medicine.*') ? 'active' : '' }}">
                {{--  --}}
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>@lang('hometr.Medicine')</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('medicine.index') }}"
                            class="{{ Route::is('medicine.index') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Show Medicine')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('medicine.create') }}"
                            class="{{ Route::is('medicine.create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Enter Medicine')</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Route::currentRouteNamed('feed.*') ? 'active' : '' }}">
                {{--  --}}
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>@lang('hometr.Feed')</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('feed.index') }}" class="{{ Route::is('feed.index') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Show feed')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('feed.create') }}" class="{{ Route::is('feed.create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Enter feed')</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Route::currentRouteNamed('cartoon.*') ? 'active' : '' }}">
                {{--  --}}
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>@lang('hometr.Cartoon')</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('cartoon.index') }}"
                            class="{{ Route::is('cartoon.index') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Show cartoon')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cartoon.create') }}"
                            class="{{ Route::is('cartoon.create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Enter cartoon')</span>
                        </a>
                    </li>
                </ul>
            </li>
            
            <li class="{{ Route::currentRouteNamed('dock.*') ? 'active' : '' }}">
                {{--  --}}
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>@lang('hometr.Dock')</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('dock.index') }}"
                            class="{{ Route::is('dock.index') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Show dock')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dock.create') }}"
                            class="{{ Route::is('dock.create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Enter dock')</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="{{ Route::currentRouteNamed('deadchicken.*') ? 'active' : '' }}">
                {{--  --}}
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>@lang('hometr.dead chicken')</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('deadchicken.index') }}"
                            class="{{ Route::is('deadchicken.index') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.show dead chicken')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('deadchicken.create') }}"
                            class="{{ Route::is('deadchicken.create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Enter dead chicken')</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="{{ Route::currentRouteNamed('eggsales.*') ? 'active' : '' }}">
                {{--  --}}
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>@lang('hometr.Egg')</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('eggsales.index') }}"
                            class="{{ Route::is('eggsales.index') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Show egg')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('eggsales.create') }}"
                            class="{{ Route::is('eggsales.create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Sell egg')</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Route::currentRouteNamed('checkensales.*') ? 'active' : '' }}">
                {{--  --}}
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>@lang('hometr.Sell Chicken')</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('checkensales.index') }}"
                            class="{{ Route::is('checkensales.index') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Show sell chicken')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('checkensales.create') }}"
                            class="{{ Route::is('checkensales.create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Sell Chicken')</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="{{ Route::currentRouteNamed('workersalary.*') ? 'active' : '' }}">
                {{--  --}}
                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>@lang('hometr.Worker salary')</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('workersalary.index') }}"
                            class="{{ Route::is('workersalary.index') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.show all worker salary')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('workersalary.create') }}"
                            class="{{ Route::is('workersalary.create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.Add worker salary')</span>
                        </a>
                    </li>
                </ul>
            </li>



            <li class="{{ Route::currentRouteNamed('additionalexpenses.*') ? 'active' : '' }}">

                <a class="sidebar-header" href="javascript:void(0)">
                    <i data-feather="box"></i>
                    <span>@lang('hometr.additional')</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>

                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('additionalexpenses.index') }}"
                            class="{{ Route::is('additionalexpenses.index') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.show additional')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('additionalexpenses.create') }}"
                            class="{{ Route::is('additionalexpenses.create') ? 'active' : '' }}">
                            <i class="fa fa-circle"></i>
                            <span>@lang('hometr.add additional')</span>
                        </a>
                    </li>
                </ul>
            </li>




















        </ul>
    </div>
</div>
