@extends('layouts.custom-app')

    @section('styles')



    @endsection

    @section('class')

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

    @endsection

        @section('content')

            <!-- Theme-Layout -->
            <div class="col-login mx-auto">
                <div class="text-center">
                    <img src="{{asset('assets/images/brand/logo-white.png')}}" class="header-brand-img" alt="" style="max-width: 130px;">
                </div>
            </div>
            <!-- CONTAINER OPEN -->
            <div class="container-login100">
                <div class="wrap-login100 p-6">
                    <form class="login100-form validate-form">
                        <div class="text-center mb-4">
                            <img src="{{asset('assets/images/users/21.jpg')}}" alt="lockscreen image" class="avatar avatar-xxl brround mb-2">
                            <h4>Paul Kiyingi</h4>
                        </div>
                        <div class="wrap-input100 validate-input input-group" id="Password-toggle" data-bs-validate="Password is required">
                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                            </a>
                            <input class="input100 form-control" type="password" placeholder="Password">
                        </div>
                        <div class="container-login100-form-btn pt-0">
                            <a href="{{url('login')}}" class="login100-form-btn btn-primary">
                                    Unlock
                                </a>
                        </div>
                        <div class="text-center pt-2">
                            <span class="txt1">
                                    I Forgot
                                </span>
                            <a class="" href="{{url('forgot-password')}}">
                                    Give me Hint
                                </a>
                        </div>
                        <label class="login-social-icon"><span>OR</span></label>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0)">
                                <div class="social-login me-4 text-center">
                                    <i class="fa fa-google"></i>
                                </div>
                            </a>
                            <a href="javascript:void(0)">
                                <div class="social-login me-4 text-center">
                                    <i class="fa fa-facebook"></i>
                                </div>
                            </a>
                            <a href="javascript:void(0)">
                                <div class="social-login text-center">
                                    <i class="fa fa-twitter"></i>
                                </div>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->

        @endsection

    @section('scripts')

    <!-- SHOW PASSWORD JS -->
    <script src="{{asset('assets/js/show-password.min.js')}}"></script>

    @endsection
