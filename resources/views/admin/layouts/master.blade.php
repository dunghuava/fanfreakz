<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <base href="{{asset('')}}">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link href="{{asset('vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/nprogress/nprogress.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/iCheck/skins/flat/green.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/jqvmap/dist/jqvmap.min.css" rel="stylesheet')}}"/>
        <link href="{{asset('vendor/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
        <link href="{{asset('public/css/admin.css?id='.filemtime(public_path('/css/admin.css')).'')}}" rel="stylesheet">
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('system.layouts.sibar')
                @include('system.layouts.navigation')
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
        <script src="{{asset('vendor/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('vendor/fastclick/lib/fastclick.js')}}"></script>
        <script src="{{asset('vendor/nprogress/nprogress.js')}}"></script>
        <script src="{{asset('public/js/custom.min.js')}}"></script>
    </body>
</html>
