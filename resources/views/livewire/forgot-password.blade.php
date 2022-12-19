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
                                Forgot Password
                            </span>
                            <p class="text-muted">Enter the email address registered on your account</p>
                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                </a>
                                <input class="input100 form-control" type="email" placeholder="Email">
                            </div>
                            <div class=" row justify-content-center py-2">
                                <button  class="btn btn-primary input100">Reset Password</button>
                            </div>
                          
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->

        @endsection

    @section('scripts')

    @endsection
