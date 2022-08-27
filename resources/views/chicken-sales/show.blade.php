@extends('layouts.app')
@section('content')
    <div class="page-body">
        <div class="container-fluid bootstrap snippets bootdeys">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-default invoice" id="invoice">
                        <div class="card-body">
                            <div class="invoice-ribbon">
                                <div class="ribbon-inner">PAID</div>
                            </div>
                            <div class="row">
                                <div
                                    class="col-sm-6 top-left {{ LaravelLocalization::getCurrentLocaleDirection() === 'rtl' ? 'order-2 text-end' : '' }}">
                                    <img src="{{ asset('assets/photos/logo.webp') }}" alt="logo" width="100"
                                        height="100">
                                </div>

                                <div
                                    class="col-sm-6 top-right {{ LaravelLocalization::getCurrentLocaleDirection() === 'rtl' ? 'text-end' : '' }}">
                                    <h3 class="marginright">In-{{ $chickensale->id }}</h3>
                                    <span
                                        class="marginright">{{ \Carbon\Carbon::parse($chickensale->created_at)->translatedFormat('l j F Y H:i') }}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col-sm-3 from">
                                    <p class="lead marginbottom">@lang('hometr.From') : @lang('hometr.Farm Name')</p>
                                        <p>@lang('hometr.Phone'): 01050505525 - 01007145434</p>
                                </div>
                                {{-- <div class="col-sm-3 to">
                                    <p class="lead marginbottom">@lang('general.To') : {{ $recievedProduct->customer->name }}
                                    </p>
                                    @if (isset($recievedProduct->customer->phone))
                                        <p>@lang('Rmilk.Phone') {{ $recievedProduct->customer->phone }}</p>
                                    @endif
                                </div> --}}


                                <div class="col-sm-3">
                                    <p class="lead marginbottom"> @lang('hometr.Saled chicke bill') <br></p>
                                </div>

                                <div class="col-sm-3 text-right payment-details">
                                    <p class="lead marginbottom payment-info">@lang('hometr.Details')</p>
                                    <p>@lang('hometr.Date'):
                                        {{ \Carbon\Carbon::parse($chickensale->created_at)->translatedFormat('l j F Y H:i') }}
                                    </p>
                                    <p>@lang('hometr.Total salary'): {{ $chickensale->total }}
                                        @lang('hometr.pound')</p>
                                </div>
                            </div>
                            <div class="row table-row">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width:5%">#</th>
                                            
                                            <th class="text-right" style="width:15%">@lang('hometr.Chicken weights')</th>
                                            <th class="text-right" style="width:15%">@lang('hometr.Kilo price')</th>
                                            <th class="text-right" style="width:15%">@lang('hometr.Sell date')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-right">{{ $chickensale->weights }}</td>
                                            <td class="text-right">{{ $chickensale->kilo_price }} @lang('hometr.pound')
                                            </td>
                                            <td class="text-right">
                                                {{\Carbon\Carbon::parse($chickensale->created_at)->translatedFormat('l j F Y H:i') }} 
                                                </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 margintop">
                                    <button class="btn btn-success" id="btnPrint"><i class="fa fa-print"></i>
                                        @lang('hometr.Print invoice')
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('javascript')
    <script>
        $(function() {
            $("#btnPrint").click(function() {
                var contents = $(".page-body").html();
                var frame1 = $('<iframe />');
                frame1[0].name = "frame1";
                frame1.css({
                    "position": "absolute",
                    "top": "-1000000px"
                });
                $("body").append(frame1);
                var frameDoc = frame1[0].contentWindow ? frame1[0].contentWindow : frame1[0].contentDocument
                    .document ? frame1[0].contentDocument.document : frame1[0].contentDocument;
                frameDoc.document.open();
                //Create a new HTML document.
                frameDoc.document.write(
                    '<html lang="{{ LaravelLocalization::getCurrentLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}"><head><title>Re-{{ $chickensale->id }}</title>');
                frameDoc.document.write('</head><body class="{{ LaravelLocalization::getCurrentLocaleDirection() }}">');
                //Append the external CSS file.
                frameDoc.document.write(
                    '<link href="/assets/css/vendors/font-awesome.css" rel="stylesheet" type="text/css" />'
                    );
                frameDoc.document.write(
                    '<link href="/assets/css/vendors/flag-icon.css" rel="stylesheet" type="text/css" />'
                    );
                frameDoc.document.write(
                    '<link href="/assets/css/vendors/icofont.css" rel="stylesheet" type="text/css" />');
                frameDoc.document.write(
                    '<link href="/assets/css/vendors/prism.css" rel="stylesheet" type="text/css" />');
                frameDoc.document.write(
                    '<link href="/assets/css/vendors/bootstrap.css" rel="stylesheet" type="text/css" />'
                    );
                frameDoc.document.write(
                    '<link href="/assets/css/style.css" rel="stylesheet" type="text/css" />');
                frameDoc.document.write(
                    '<link href="/css/recieved-product-invoice.css" rel="stylesheet" type="text/css" />'
                    );
                //Append the DIV contents.
                frameDoc.document.write(contents);
                frameDoc.document.write('</body></html>');
                frameDoc.document.close();
                setTimeout(function() {
                    window.frames["frame1"].focus();
                    window.frames["frame1"].print();
                    frame1.remove();
                }, 500);
            });
        });
    </script>
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('css/recieved-product-invoice.css') }}">
@endpush
