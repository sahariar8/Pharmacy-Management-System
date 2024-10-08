
@extends('Auth.layouts.master')

    @section('title', 'Login - Pharmacy M.S')
    @section('content')
        <main>
            <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                        <img src="{{ asset('assets/img/logo.png')}}" alt="">
                        <span class="d-none d-lg-block">Pharmacy M.C</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">
                            
                        <div class="pt-4 pb-2">
                        @include('components.message')
                            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                        </div>

                        <form method="post" action="{{ route('login.post')}}" class="row g-3 needs-validation" novalidate>
                            @csrf
                            <div class="col-12">
                            <label for="yourUsername" class="form-label">Email</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                <input type="email" name="email" class="form-control" id="yourUsername" required>
                                <div class="invalid-feedback">Please enter your email.</div>
                            </div>
                            </div>

                            <div class="col-12">
                            <label for="yourPassword" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                            <div class="invalid-feedback">Please enter your password!</div>
                            </div>

                            <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            </div>
                            <div class="col-12">
                            <button class="btn btn-primary w-100" type="submit">Login</button>
                            </div>
                            {{-- <div class="col-12 flex justify-between">
                            <p class="small mb-0">Don't have account?
                                <a href="{{ route('register')}}">Create an account</a>
                                <a href="">Forget Password</a>
                                </p>
                            </div> --}}
                            <div class="col-12 d-flex  align-items-center">
                                <p class="small">
                                Don't have an account?
                                <a href="{{ route('register') }}">Create an account</a>
                                |
                                <a href="{{ route('forgetPassword')}}">Forgot Password?</a>

                                </p>

                            </div>

                        </form>

                        </div>
                    </div>
                    </div>
                </div>
                </div>

            </section>

            </div>
        </main>
    @endsection

