@extends('layouts.frontend.app')

@section('content')
<section class="block-inner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Reset Password</h1>
                <div class="breadcrumbs">
                    <ul>
                        <li><i class="pe-7s-home"></i> <a href="home-style-one.html" title="">Home</a></li>
                        <li><a href="#" title="">Login & Registration</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="login-reg-inner">
    <div class="container">
<div class="row justify-content-center">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                    </div>
                    <button type="submit" class="btn btn-style">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
    </div>
</section>

@endsection
