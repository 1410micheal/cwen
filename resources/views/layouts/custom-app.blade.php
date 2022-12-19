<!doctype html>
<html lang="en" dir="ltr">

    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Sash –  Laravel Bootstrap 5 Admin & Dashboard Template">
        <meta name="author" content="SPRUKO™">
        <meta name="keywords" content="admin, admin dashboard, admin dashboard template, bootstrap admin, bootstrap dashboard, dashboard laravel, dashboard template, laravel admin, laravel admin dashboard, laravel admin dashboard template, laravel admin panel, laravel admin template, laravel dashboard template, laravel template, laravel ui template">
        <link rel="icon" href="{{asset('assets/images/brand/favicon.png')}}" />
        <!-- title -->
        <title>Jubilee Life Insurance</title>

        @include('layouts.components.custom-styles')

    </head>

    <body class="">

        @yield('class')

            <!-- global-loader -->
            <div id="global-loader">
                 <div class="spinner1" style="margin-top:20%;">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
            </div>
            <!-- global-loader closed -->

                <!-- PAGE -->
                <div class="page">
                    <div class="">

                        @yield('content')

                    </div>
                </div>
                <!-- End PAGE -->

        </div>
        <!-- BACKGROUND-IMAGE CLOSED -->

        @include('layouts.components.custom-scripts')

    </body>

</html>
