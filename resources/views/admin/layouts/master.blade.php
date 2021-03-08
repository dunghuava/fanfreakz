<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <base href="{{asset('admin')}}">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('plugins/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/nprogress/nprogress.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/iCheck/skins/flat/green.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/jqvmap/dist/jqvmap.min.css" rel="stylesheet')}}"/>
        <link href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
        <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/css/admin_theme.css')}}" rel="stylesheet">
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('admin.layouts.sibar')
                @include('admin.layouts.navigation')
                <div class="right_col" role="main">
                    <div class="page-title">
                        <div class="title_left">
                          <h4>@yield('title')</h4>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            @yield('content')
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- jQuery -->
        <script src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <!-- FastClick -->
        <script src="{{asset('plugins/fastclick/lib/fastclick.js')}}"></script>
        <!-- NProgress -->
        <script src="{{asset('plugins/nprogress/nprogress.js')}}"></script>
        <!-- Chart.js -->
        <script src="{{asset('plugins/Chart.js/dist/Chart.min.js')}}"></script>
        <!-- gauge.js -->
        <script src="{{asset('plugins/gauge.js/dist/gauge.min.js')}}"></script>
        <!-- bootstrap-progressbar -->
        <script src="{{asset('plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
        <!-- iCheck -->
        <script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
        <!-- Skycons -->
        <script src="{{asset('plugins/skycons/skycons.js')}}"></script>
        <!-- Flot -->
        <script src="{{asset('plugins/Flot/jquery.flot.js')}}"></script>
        <script src="{{asset('plugins/Flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('plugins/Flot/jquery.flot.time.js')}}"></script>
        <script src="{{asset('plugins/Flot/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('plugins/Flot/jquery.flot.resize.js')}}"></script>
        <!-- Flot plugins -->
        <script src="{{asset('plugins/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
        <script src="{{asset('plugins/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
        <script src="{{asset('plugins/flot.curvedlines/curvedLines.js')}}"></script>
        <!-- DateJS -->
        <script src="{{asset('plugins/DateJS/build/date.js')}}"></script>
        <!-- JQVMap -->
        <script src="{{asset('plugins/jqvmap/dist/jquery.vmap.js')}}"></script>
        <script src="{{asset('plugins/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{asset('plugins/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="{{asset('plugins/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{asset('build/js/custom.min.js')}}"></script>
    </body>
</html>
