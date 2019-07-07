@extends('layouts.app')

@section('content')
<div class="container">
    <section id="regestration">
        <div class="container-fluid">
            <div class="row full-height-vh m-0">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body register-img">
                                <div class="row m-0">
                                    <div class="col-lg-6 d-none d-lg-block py-2 text-center">
                                        <img src="app-assets/img/gallery/register.png" alt="" class="img-fluid mt-3 pl-3" width="400"
                                             height="230">
                                    </div>
                                    <div class="col-lg-6 col-md-12 px-4 pt-3 bg-white">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <h4 class="card-title mb-2">Create Account</h4>
                                            <p class="card-text mb-3">
                                                Fill the below form to create a new account.
                                            </p>
                                            <div>
                                                <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" name="name" Placeholder="UserName" value="{{ old('name') }}" required autocomplete="name" autofocus/>

                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                                                    <strong>{{ $message }}</strong>
                                                                                </span>
                                                @enderror
                                            </div>

                                            <div>
                                                <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email"/>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div>
                                                <input type="password" class="form-control mb-3 @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password"/>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div>
                                                <input type="password" class="form-control mb-3"
                                                       name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"/>

                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline mb-3">
                                                <input type="checkbox" id="customCheckboxInline1"
                                                       name="customCheckboxInline1" class="custom-control-input"
                                                       checked/>
                                                <label class="custom-control-label" for="customCheckboxInline1">
                                                    I accept the terms & conditions.
                                                </label>
                                            </div>
                                            <div class="fg-actions d-flex justify-content-between">
                                                <div class="login-btn">
                                                    <button class="btn btn-outline-primary">
                                                        <a href="login" class="text-decoration-none">
                                                            Back To Login
                                                        </a>
                                                    </button>
                                                </div>
                                                <div class="recover-pass">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Register') }}
                                                    </button>
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
