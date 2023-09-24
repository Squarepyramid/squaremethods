@extends('layouts.welcome')

@section('content')
<div class="dx-popup dx-popup-signin" id="signup">
<!--    <button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="Close">
        <svg xmlns="http://www.w3.org/2000/svg" version="10" viewBox="0 0 24 24">
            <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
        </svg>
    </button>-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" >
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body dx-signin" style="text-align: center; margin: auto;" >
                        <form method="POST" action="{{ route('register') }}" class="dx-form" style="">
                            @csrf

                           {{-- <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group has-feedback">
                                <input type="text" name="team_name" class="form-control" required placeholder="{{ __('Confirm ') }}">
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>--}}



                            <div class="dx-form-group-md">
                                <a href="account.html" class="dx-btn dx-btn-block dx-btn-popup dx-btn-envato d-flex align-items-center justify-content-center">
                                    <span class="fas fa-leaf mr-20"></span><span>Sign Up with Google</span>
                                </a>
                            </div>
                            <div class="dx-form-group-md">
                                <div class="dx-signin-or">OR</div>
                            </div>
                            <div class="dx-form-group-md">
<!--                                <input type="text" class="form-control form-control-style-4" placeholder="Username">-->
                                <input placeholder="Name" id="name" type="text" class="form-control form-control-style-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="dx-form-group-md">
<!--                                <input type="text" class="form-control form-control-style-4" placeholder="Username">-->
                                <input placeholder="Email" id="email" type="email" class="form-control form-control-style-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
<!--                            <div class="dx-form-group-md">
                                <input type="email" class="form-control form-control-style-4" aria-describedby="emailHelp" placeholder="Email">

                            </div>-->
                            <div class="dx-form-group-md">
<!--                                <input type="password" class="form-control form-control-style-4" placeholder="Password">-->
                                <input placeholder="Password" id="password" type="password" class="form-control form-control-style-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="dx-form-group-md">
<!--                                <input type="password" class="form-control form-control-style-4" placeholder="Confirm password">-->
                                <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control form-control-style-4" name="password_confirmation" required autocomplete="new-password">

                            </div>
<!--                            <div class="dx-form-group-md">
                                <input type="text" name="team_name" class="form-control" required placeholder="Company Name">
                            </div>-->
                            <div class="dx-form-group-md">
                                <a href="account.html" class="dx-btn dx-btn-block dx-btn-popup">Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="dx-signin text-center">
        <h1 class="h3 text-white mb-30">Sign Up</h1>
        <form action="#" class="dx-form">
            <div class="dx-form-group-md">
                <a href="account.html" class="dx-btn dx-btn-block dx-btn-popup dx-btn-envato d-flex align-items-center justify-content-center">
                    <span class="fas fa-leaf mr-20"></span><span>Sign Up with Envato</span>
                </a>
            </div>
            <div class="dx-form-group-md">
                <div class="dx-signin-or">OR</div>
            </div>
            <div class="dx-form-group-md">
                <input type="text" class="form-control form-control-style-4" placeholder="Username">
            </div>
            <div class="dx-form-group-md">
                <input type="email" class="form-control form-control-style-4" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="dx-form-group-md">
                <input type="password" class="form-control form-control-style-4" placeholder="Password">
            </div>
            <div class="dx-form-group-md">
                <input type="password" class="form-control form-control-style-4" placeholder="Confirm password">
            </div>
            <div class="dx-form-group-md">
                <a href="account.html" class="dx-btn dx-btn-block dx-btn-popup">Sign Up</a>
            </div>
        </form>
    </div>-->
</div>
@endsection
