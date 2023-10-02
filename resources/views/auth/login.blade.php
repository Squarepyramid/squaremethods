@extends('layouts.welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body dx-signin-content dx-signin text-center" style="margin: auto;">
                    <form method="POST" action="{{ route('login') }}" class="dx-form">
                        @csrf
                        <div class="dx-form-group-md">
                            <a href="account.html" class="dx-btn dx-btn-block dx-btn-popup dx-btn-envato d-flex align-items-center justify-content-center">
                                <span class="fas fa-leaf mr-20"></span><span>Log in with Google</span>
                            </a>
                        </div>
                        <div class="dx-form-group-md">
                            <div class="dx-signin-or">OR</div>
                        </div>
                        <div class="dx-form-group-md">
{{--                            <input type="text" class="form-control form-control-style-4" placeholder="Username Or Email">--}}
                            <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-style-4" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="dx-form-group-md">
<!--                            <input type="password" class="form-control form-control-style-4" placeholder="Password">-->
                            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-style-4" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="dx-form-group-md">
<!--                            <a href="account.html" class="dx-btn dx-btn-block dx-btn-popup">Log In</a>-->
                            <div class="row">
                                <div class="col-3">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                                <div class="col-9" style="text-align: left">
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="dx-form-group-md">
                            <button type="submit"  class="dx-btn dx-btn-block dx-btn-popup">Log In</button>
                        </div>
                        <div class="dx-form-group-md">
                            <div class="d-flex justify-content-between">
                                <a data-fancybox data-touch="false" data-close-existing="true" data-src="#reset-password" href="{{ route('password.request') }}">Reset your password</a>
                                <a data-fancybox data-touch="false" data-close-existing="true" data-src="#signup" href="javascript:;">Sign Up</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
