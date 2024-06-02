<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Property Vendor</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="This Vendor Dashboard" name="description" />
        <meta content="netup" name="author" />
        <link rel="shortcut icon" href="{{asset('vendor/assets/images/favicon.ico')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('vendor/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('vendor/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('vendor/assets/css/app.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <link href="{{asset('vendor/assets/css/custom.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
        {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <!-- Material Design Bootstrap CSS -->
            {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/css/mdb.min.css" rel="stylesheet"> --}}

   
    </head>

    <!-- <body> -->
    <body data-sidebar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('layouts.property vendor.header')
            <!------- Sidebar Start ------->
            @include('layouts.property vendor.sidebar')
            <!---- Sidebar End ---->

            @yield('listing-sidebar')


            <div class="main-content">
                <div class="page-content">
                    @yield('property-vendor-content')
                </div>
                <!-- End Page-content -->

                
                @include('layouts.property vendor.footer')


            </div>

        </div>

        <!-- Right Sidebar -->
        @include('layouts.property vendor.rightSideBar')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        

        <!-- JAVASCRIPT -->
        {{-- <script src="{{asset('vendor/assets/libs/jquery/jquery.min.js')}}"></script> --}}
        <script src="{{asset('vendor/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('vendor/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('vendor/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('vendor/assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('vendor/assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('vendor/assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('vendor/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
        <script src="{{asset('vendor/assets/js/pages/ecommerce-cart.init.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('vendor/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{asset('vendor/assets/js/pages/apexcharts.init.js')}}"></script>
        <script src="{{asset('vendor/assets/js/app.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <!-- Bootstrap JS and Popper.js -->
        {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}
        <!-- Material Design Bootstrap JS -->
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/js/mdb.min.js"></script> --}}




    </body>

</html>