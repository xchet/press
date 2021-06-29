<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title') - {{ config('app.name') }}</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{{ asset('assets') }}/img/favicon.ico" /> 
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        @yield('css')
    </head>

    <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
        <div class="page-wrapper">
            
            @include('admin.partials.header')

            <div class="page-container">
                @include('admin.partials.sidebar')

                <div class="page-content-wrapper">
                    <div class="page-content">
                        <div class="page-bar">
                            <div class="page-title-breadcrumb">
                                <div class=" pull-left">
                                    <div class="page-title">@yield('title')</div>
                                </div>
                                <ol class="breadcrumb page-breadcrumb pull-right">
                                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/admin">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </li>
                                    @yield('mid-br')
                                    <li class="active">@yield('title')</li>
                                </ol>
                            </div>
                        </div>
                         @yield('content')
                    </div>
                </div>

                @include('admin.partials.settings-sidebar')
            </div>

            <div class="page-footer">
                <div class="page-footer-inner"> {{ now()->year }} &copy; 
                    <a href="mailto:xchetit@gmail.com" target="_top" class="makerCss">{{ config('app.owner') }}</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            
        </div>
        
        <script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js" ></script>
        <script src="{{ asset('assets') }}/plugins/popper/popper.min.js" ></script>
        <script src="{{ asset('assets') }}/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
        <script src="{{ asset('assets') }}/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- bootstrap -->
        <script src="{{ asset('assets') }}/plugins/bootstrap/js/bootstrap.min.js" ></script>
        <!-- Common js-->
        <script src="{{ asset('assets') }}/js/app.js" ></script>
        <script src="{{ asset('assets') }}/js/layout.js" ></script>
        <script src="{{ asset('assets') }}/js/theme-color.js" ></script>
        <!-- Material -->
        <script src="{{ asset('assets') }}/plugins/material/material.min.js"></script>
        <!-- animation -->
        <script src="{{ asset('assets') }}/js/pages/ui/animations.js" ></script>

        @yield('js')
    </body>
</html>