@extends('layouts.custom-app')

    @section('styles')



    @endsection

    @section('class')

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

    @endsection

        @section('content')

                <!-- CONTAINER OPEN -->
                <div class="col-login mx-auto">
                    <div class="text-center">
                        <img src="{{asset('assets/images/brand/logo-white.png')}}" class="header-brand-img m-0" alt="" style="max-width: 130px;">
                    </div>
                </div>

                <!-- CONTAINER OPEN -->
                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form">
                            <span class="login100-form-title pb-5">
                                Verify your Login
                            </span>
                            <p class="text-muted">Enter the OTP sent to your email</p>
                            <div class="wrap-input100 validate-input input-group" >
                                
                                <input class="input100 form-control" type="text" placeholder="Enter OTP">
                            </div>
                            <div class="submit col-lg-12">
                                <a class="btn btn-primary col-lg-12" href="{{url('index')}}">Verify</a>
                            </div>
                            <div class="text-center mt-4">
                                <p class="text-dark mb-0">Din't get it?<a class="text-primary ms-1" href="{{url('login')}}">Send me Back</a></p>
                            </div>
                           
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->

        @endsection

    @section('scripts')

    @endsection
