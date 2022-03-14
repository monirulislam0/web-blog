<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>

             @yield('page_title')
        </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('assets/frontend/assets/favicon.ico')}}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        {{-- <link href="./assets/frontend/css/styles.css" rel="stylesheet" /> --}}
        <link href="{{asset('/assets/frontend/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('Frontend.assets.header')
        <!-- Page header with logo and tagline-->

        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    @yield('content')
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <br>
                    @include('Frontend.assets.aside')
                </div>
            </div>
        </div>
        <!-- Footer-->
        @include('Frontend.assets.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        {{-- <script src="./assets/frontend/js/scripts.js"></script> --}}

        <script src="{{asset('/assets/frontend/js/scripts.js')}}"></script>

    </body>
</html>
