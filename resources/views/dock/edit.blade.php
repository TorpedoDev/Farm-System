@extends('layouts.app')

@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>@lang('hometr.Edit dock')</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('dock.index') }}">@lang('hometr.Show dock')</a></li>
                            <li class="breadcrumb-item active">@lang('hometr.Edit dock')</li>
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
                            <h5>@lang('hometr.Edit data of dock')</h5>
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
                                <form action="{{ route('dock.update' , $dock ) }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="form-group">
                                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                            @lang('hometr.Dock q')</label>
                                        <input class="form-control @error('quantity') is-invalid @enderror" type="text"
                                            name="quantity" value="{{ $dock->quantity }}" required>
                                        @error('quantity')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="validationCustom01" class="col-form-label pt-0"><span>*</span>
                                            @lang('hometr.salary')</label>
                                        <input class="form-control @error('salary') is-invalid @enderror" type="text"
                                            name="salary" value="{{ $dock->salary }}" required>
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
