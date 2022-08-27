@extends('layouts.app')

@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>@lang('hometr.Edit worker salalry')</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('deadchicken.index') }}">@lang('hometr.show all worker salary')</a></li>
                            <li class="breadcrumb-item active">@lang('hometr.Edit worker salalry')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row product-adding">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>@lang('hometr.Edit data of worker salary')</h5>
                        </div>
                        <div class="card-body">
                            <div class="digital-add needs-validation">
                                @if (Session::has('error'))
                                    <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                        <strong>{{ Session::get('error') }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @elseif (Session::has('success'))
                                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                        <strong>{{ Session::get('success') }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <form action="{{ route('workersalary.update' , $worker ) }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="form-group">
                                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                            @lang('hometr.wsal')</label>
                                        <input class="form-control @error('salary') is-invalid @enderror" type="text"
                                            name="salary" value="{{ $worker->salary }}" required>
                                        @error('salary')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                   
                                  
                                    <div class="form-group mb-0">
                                        <div class="product-buttons">
                                            <button type="submit" class="btn btn-primary">@lang('hometr.Edit')</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
