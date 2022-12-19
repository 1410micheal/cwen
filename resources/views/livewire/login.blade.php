@extends('layouts.custom-app')

    @section('styles')


    @endsection

    @section('class')

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

    @endsection

        @section('content')


                <!-- CONTAINER OPEN -->
                <div class="col-login mx-auto mt-7">
                    <div class="text-center">
                        <img src="{{asset('assets/images/brand/logo-white.png')}}" class="header-brand-img" alt="" style="max-width: 130px;" >
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                            <span class="login100-form-title pb-5">
                                Login
                            </span>

                            <div class="panel panel-primary">
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                
                                        @csrf
                                        <div class="wrap-input100 validate-input input-group">
                                                <a href="javascript:void(0)" class="input-group-text">
                                                    <i class="zmdi zmdi-account  text-white" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control @error('email') is-invalid @enderror" type="email" placeholder="Email or Phone Number" value="{{ old('email') }}" name="email" autofocus required>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text text-white">
                                                    <i class="zmdi zmdi-eye  text-white" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required>
                                               
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="text-end pt-4">
                                                <p class="mb-0"><a href="{{url('forgot-password')}}" class="text-primary ms-1">Forgot Password?</a></p>
                                            </div>
                                            <div class="container-login100-form-btn">
                                                <button type="submit" class="btn btn-primary input100">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>

                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->

        @endsection

    @section('scripts')

    <!-- GENERATE OTP JS -->
    <script src="{{asset('assets/js/generate-otp.js')}}"></script>

    @endsection
