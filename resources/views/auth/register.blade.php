@extends('layouts.frontend.app')

@section('content')
<section class="block-inner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Login & Registration</h1>
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
        <div class="row">
            <div class="col-sm-6">
                <div class="login-form-inner">
                    <h3 class="category-headding ">LOGIN TO YOUR ACCOUNT</h3>
                    <div class="headding-border bg-color-1"></div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label>Username Or Email <sup>*</sup></label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        
                        <label>Password <sup>*</sup></label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="*******">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <label class="checkbox-inline">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            Remember me
                        </label>

                        <button type="submit" class="btn btn-style">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <div class="foeget">
                            <a href="{{ route('password.request') }}">
                                Forget username/password?
                            </a>
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ url('login/facebook') }}">
                                    <div class="social_icon">
                                        <div class="social_icon_box social_icon_box_1">
                                            <div class="icon facebook-icon"></div>
                                            <span class="social_info">Login with facebook</span>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ url('login/twitter') }}">
                                    <div class="social_icon">
                                        <div class="social_icon_box social_icon_box_2">
                                            <div class="icon twitter-icon"></div>
                                            <span class="social_info">Login with twitter</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="register-form-inner">
                    <h3 class="category-headding ">REGISTER NOW!</h3>
                    <div class="headding-border bg-color-1"></div>
                    <form method="POST" action="{{ route('register') }}">

                        {{-- <label>Username <sup>*</sup></label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Username">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label>Username <sup>*</sup></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                    <label for="name" class="col-md-4 control-label">Name</label>
         
                                    <div class="col-md-6">
         
                                    @if(!empty($name))
         
                                        <input id="name" type="text" class="form-control" name="name" value="{{$name}}" required autofocus>
         
                                    @else
         
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
         
                                    @endif    
         
                                        @if ($errors->has('name'))
         
                                            <span class="help-block">
         
                                                <strong>{{ $errors->first('name') }}</strong>
         
                                            </span>
         
                                        @endif
         
                                    </div>
         
                                </div>
         
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
         
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
         
                                    <div class="col-md-6">
         
                                        @if(!empty($email))
         
                                        <input id="email" type="email" class="form-control" name="email" value="{{$email}}" required>
         
                                        @else
         
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
         
                                        @endif
         
                                        @if ($errors->has('email'))
         
                                            <span class="help-block">
         
                                                <strong>{{ $errors->first('email') }}</strong>
         
                                            </span>
         
                                        @endif
         
                                    </div>
         
                                </div>



                        <label>Password <sup>*</sup></label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Write Your Password Here ...">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        
                        <label>Repeat Password <sup>*</sup></label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <button type="submit" class="btn btn-style">Register Now!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

