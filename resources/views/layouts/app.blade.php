<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="CWEN -  Management portal">
    <meta name="author" content="CWEN">
    <meta name="keywords" content="jubille Life Uganda,insurance,premiums,my insurance,life insurance">
    <link rel="icon" href="{{asset('assets/images/brand/favicon.png')}}" />
    <!-- title -->
    <title>CWEN</title>

    @include('layouts.components.styles')

</head>

<body class="app sidebar-mini ltr sidenav-toggled">

        <!-- global-loader -->
        <div id="global-loader" style="background-image:url( {{ asset('assets/images/bg/map.png') }});  background-position:0,0; background-repeat:no-repeat;">
                   
                    <div class="spinner1" style="margin-top:20%;">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
        </div>
        <!-- global-loader closed -->

        <!-- page -->
        <div class="page">
            <div class="page-main">

             
                    @include('layouts.components.app-header')

                    @include('layouts.components.app-sidebar')

                    <!--app-content open-->
                    <div class="main-content app-content mt-0">
                        <div class="side-app">

                            <!-- container -->
                            <div class="main-container container-fluid py-3">

                                @foreach (config('constants.alerts') as $msg)
                                @if(Session::has('alert-' . $msg['key']))


                                   <div class="alert alert-{{ ($msg['key'])?$msg['key']:'success' }}" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                                        {!! Session::get('alert-' .$msg['key']) !!}</a>
                                   </div>

                                  @endif
                                @endforeach

                                @include('shared.form_errors') {{-- Valdation errors --}}


                                @yield('content')

                            </div>
                            <!-- container-closed -->
                        </div>
                    </div>
                    <!--app-content closed-->
                </div>
                <!-- page-main closed -->
       

                @include('layouts.components.sidebar-right')

                @include('layouts.components.modal')

                @yield('modal')

                @include('layouts.components.footer')


        </div>
        <!-- page -->

        @include('layouts.components.scripts')

    </body>

</html>
