@extends('layouts.app')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <h3> @lang('hometr.Dashboard')
                                <small>@lang('hometr.Farm Name')</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item active">@lang('hometr.Dashboard')</li>
                        </ol>
                    </div>
                </div>
                <br>
                {{-- <div class="col-lg-6">
                    <img class="yafta" src="{{ asset('welcome/assets/img/yafta.jpeg') }}">
                </div> --}}
                <div class="col-lg-6">
                    {{-- <img src="{{ asset('welcome/assets/img/1.jpg') }}" alt="">
                    <img src="{{ asset('welcome/assets/img/2.jpg') }}" alt="">
                    <img src="{{ asset('welcome/assets/img/3.jpg') }}" alt=""> --}}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            {{-- <div class="row product-adding">
                <div class="col-xl-12">
                    <img class="yafta" src="{{ asset('welcome/assets/img/yafta.jpeg') }}">
                </div>
            </div> --}}


            <div class="row">
                <div class="card col-sm-6" style="">
                    <div class="card-body">
                        <h5 class="card-title">@lang('hometr.total chickenin')</h5>
                        <h6 style="color: black; font-weight:bold" class="card-text">{{ $sum_chickenin }} @lang('hometr.pound')
                        </h6>
                    </div>
                </div>

                <div class="card col-sm-6" style="">
                    <div class="card-body">
                        <h5 class="card-title">@lang('hometr.total medicine')</h5>
                        <h6 style="color: black; font-weight:bold" class="card-text">{{ $sum_medicine }} @lang('hometr.pound')
                        </h6>
                    </div>
                </div>


                <div class="card col-sm-6" style="">
                    <div class="card-body">
                        <h5 class="card-title">@lang('hometr.total feed')</h5>
                        <h6 style="color: black; font-weight:bold" class="card-text">{{ $sum_feed }} @lang('hometr.pound')
                        </h6>
                    </div>
                </div>

                <div class="card col-sm-6" style="">
                    <div class="card-body">
                        <h5 class="card-title">@lang('hometr.total cartoon')</h5>
                        <h6 style="color: black; font-weight:bold" class="card-text">{{ $sum_cartoon }} @lang('hometr.pound')
                        </h6>
                    </div>
                </div>

                <div class="card col-sm-6" style="">
                    <div class="card-body">
                        <h5 class="card-title">@lang('hometr.total eggs')</h5>
                        <h6 style="color: black; font-weight:bold" class="card-text">{{ $sum_egg }} @lang('hometr.pound')
                        </h6>
                    </div>
                </div>

                <div class="card col-sm-6" style="">
                    <div class="card-body">
                        <h5 class="card-title">@lang('hometr.total chickenout')</h5>
                        <h6 style="color: black; font-weight:bold" class="card-text">{{ $sum_chickenout }}
                            @lang('hometr.pound')</h6>
                    </div>
                </div>

                <div class="card col-sm-6" style="">
                    <div class="card-body">
                        <h5 class="card-title">@lang('hometr.total dock')</h5>
                        <h6 style="color: black; font-weight:bold" class="card-text">{{ $sum_dock }} @lang('hometr.pound')
                        </h6>
                    </div>
                </div>

                <div class="card col-sm-6" style="">
                    <div class="card-body">
                        <h5 class="card-title">@lang('hometr.total dead')</h5>
                        <h6 style="color: black; font-weight:bold" class="card-text">{{ $sum_dead }} @lang('hometr.pound')
                        </h6>
                    </div>
                </div>
            

                <div class="card col-sm-6" style="">
                    <div class="card-body">
                        <h5 class="card-title">@lang('hometr.total work salary')</h5>
                        <h6 style="color: black; font-weight:bold" class="card-text">{{ $sum_worker }} @lang('hometr.pound')
                        </h6>
                    </div>
                </div>

                {{--  --}}

                <div class="card col-sm-6" style="">
                    <div class="card-body">
                        <h5 class="card-title">@lang('hometr.total additional')</h5>
                        <h6 style="color: black; font-weight:bold" class="card-text">{{ $sum_additional }} @lang('hometr.pound')
                        </h6>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
