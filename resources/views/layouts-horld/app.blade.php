<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Title Meta -->
        <meta charset="utf-8" />
        <title>Analytics | Lahomes - Real Estate Management Admin Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully responsive premium admin dashboard template, Real Estate Management Admin Template" />
        <meta name="author" content="Techzaa" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- Vendor css (Require in all Page) -->
        <link href="{{asset('assets/css/vendor.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Icons css (Require in all Page) -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css (Require in all Page) -->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Theme Config js (Require in all Page) -->
        <script src="{{asset('assets/js/config.min.js')}}"></script>
        
        @yield('style')
        @yield('style1')
        @yield('style2')
        @yield('style3')
        @yield('style4')
        @yield('style5')
   </head>
<body>
    <div id="main-wrapper">

            {{-- <!--  Header Start -->
            @include('layouts.partials.header-topbar')

            <!--  Header End --> --}}

            <div class="page-sidebar">
                <!-- Sidebar Start -->

                @include('layouts.partials.sidebare')

                <!-- Sidebar End -->
            </div>



        <div class="page-wrapper">



            <div class="body-wrapper pt-0 " style="padding-top: 0px !important;">
                @yield('content-fluid-top')
                <div class="container-fluid " style="padding-top: 0px !important;">
                    @if (!($wihoutTopMargin ?? false))
                        <div class="mt-5 pt-5"></div>
                    @endif
                    {{-- @include('layouts.partials.alert') --}}
                    @yield('modal')
                    @yield('modal1')
                    @yield('modal2')
                    @yield('modal3')

                    {{-- @include('layouts.partials.banner') --}}
                    @yield('content')
                </div>
                @yield('content-fluid')
            </div>

            <script src="{{asset('assets/js/vendor.js')}}"></script>

     <!-- App Javascript (Require in all Page) -->
     <script src="{{asset('assets/js/app.js')}}"></script>

     <!-- Vector Map Js -->
     <script src="{{asset('assets/vendor/jsvectormap/js/jsvectormap.min.js')}}"></script>
     <script src="{{asset('assets/vendor/jsvectormap/maps/world-merc.js')}}"></script>
     <script src="{{asset('assets/vendor/jsvectormap/maps/world.js')}}"></script>

     <!-- Dashboard Js -->
     <script src="{{asset('assets/js/pages/dashboard-analytics.js')}}"></script>

    @yield('script')
    @yield('script2')
    @yield('script3')
    @include('script')


</body>
</html>
