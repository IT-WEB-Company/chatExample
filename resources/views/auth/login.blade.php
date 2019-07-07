@extends('layouts.app')

@section('content')
<div class="container">
    <section id="login">
        <div class="container-fluid">
            <div class="row full-height-vh m-0">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body login-img">
                                <div class="row m-0">
                                    <div class="col-lg-6 d-lg-block d-none py-2 text-center align-middle">
                                        <img src="app-assets/img/gallery/login.png" alt="" class="img-fluid mt-5" width="400" height="230">
                                    </div>
                                    <div class="col-lg-6 col-md-12 bg-white px-4 pt-3">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <h4 class="mb-2 card-title">Login</h4>
                                            <p class="card-text mb-3">
                                                Welcome back, please login to your account.
                                            </p>
                                            <div>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div style="margin-top:15px">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="d-flex justify-content-between mt-2">
                                                <div class="remember-me">
                                                    <div
                                                        class="custom-control custom-checkbox custom-control-inline mb-3">
                                                        <input type="checkbox" id="remember"
                                                               {{ old('remember') ? 'checked' : '' }} class="custom-control-input"/>
                                                        <label class="custom-control-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="forgot-password-option">
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="fg-actions d-flex justify-content-between">
                                                <div class="login-btn">
                                                    <button class="btn btn-outline-primary">
                                                        <a href="register" class="text-decoration-none">Register</a>
                                                    </button>
                                                </div>
                                                <div class="recover-pass">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Login') }}
                                                    </button>


                                                </div>
                                            </div>
                                            <hr class="m-0">
                                            <div class="d-flex justify-content-between mt-3">
                                                <div class="option-login">
                                                    <h6 class="text-decoration-none text-primary">Or Login With</h6>
                                                </div>
                                                <div class="social-login-options">
                                                    <a class="btn btn-social-icon mr-2 btn-facebook">
                                                        <span class="fa fa-facebook"></span>
                                                    </a>
                                                    <a class="btn btn-social-icon mr-2 btn-twitter">
                                                        <span class="fa fa-twitter"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
