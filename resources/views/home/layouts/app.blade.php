<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- Keep the titles up to 50-60 characters long --}}
        <title>{{ config('app.name') }} &mdash; @yield('title') </title>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        {{-- 160 varchar --}}
        <meta name="description" content="">

        <link rel="canonical" href="http://example.com/" />
        <meta name=”robots” content=”index, follow”> 

        {{-- facebook, instagram, linkedIn --}}
        <meta property="og:type" content="article" />
        <meta property="og:title" content="TITLE OF YOUR POST OR PAGE" />
        <meta property="og:description" content="DESCRIPTION OF PAGE CONTENT" />
        <meta property="og:image" content="LINK TO THE IMAGE FILE" />
        <meta property="og:url" content="PERMALINK" />
        <meta property="og:site_name" content="SITE NAME" />

        {{-- tweeter specific graph --}}
        <meta name="twitter:title" content="TITLE OF POST OR PAGE">
        <meta name="twitter:description" content="DESCRIPTION OF PAGE CONTENT">
        <meta name="twitter:image" content="LINK TO IMAGE">
        <meta name="twitter:site" content="@USERNAME">
        <meta name="twitter:creator" content="@USERNAME">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=B612+Mono%7CCabin:400,700&display=swap" rel="stylesheet">
        {{-- <link rel="stylesheet" href="{{ asset('content') }}/fonts.min.css" /> --}}
        {{-- <link href="{{ asset('content') }}/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css"> --}}
        {{-- <link rel="stylesheet" href="{{ asset('content') }}/css/style.css"> --}}
        
        <link rel="stylesheet" href="css/app.css">

        @yield('css')

    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="site-wrap" id="app">
            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>
            
            <div class="header-top">

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6 d-flex">
                            <a href="/" class="site-logo">
                                {{ config('app.name') }}
                            </a>
                            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black">
                                <span class="icon-menu h3"></span>
                            </a>
                        </div>
                        <div class="top-login">
                            @guest
                            {{-- <div>inform info to get complete information from the information minister</div> --}}
                                @if (Route::has('login'))
                                    <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @endif

                                @if (Route::has('register'))
                                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                <a id="" class="" href="#" role="button" data-toggle="" aria-haspopup="" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <a class="" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endguest
                        </div>
                        <div class="col-12 col-lg-6 ml-auto d-flex">
                            <div class="ml-md-auto top-social d-none d-lg-inline-block">
                                <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                            </div>
                            <form action="#" class="search-form d-inline-block">
                                <div class="d-flex">
                                    <input type="email" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-secondary"><span class="icon-search"></span></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-6 d-block d-lg-none text-right">
                        </div>
                    </div>
                </div>
                
                <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <nav class="site-navigation position-relative text-right" role="navigation">
                                    @auth
                                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                            <li class="active">
                                                <a href="/" class="nav-link text-left">Home</a>
                                            </li>
                                            <li>
                                                <a href="categories.html" class="nav-link text-left">Categories</a>
                                            </li>
                                            <li>
                                                <a href="categories.html" class="nav-link text-left">Politics</a>
                                            </li>
                                            <li>
                                                <a href="categories.html" class="nav-link text-left">Business</a>
                                            </li>
                                            <li>
                                                <a href="categories.html" class="nav-link text-left">Health</a>
                                            </li>
                                            <li><a href="categories.html" class="nav-link text-left">Design</a></li>
                                            <li>
                                                <a href="categories.html" class="nav-link text-left">Sport</a>
                                            </li>
                                            <li><a href="contact.html" class="nav-link text-left">Contact</a></li>
                                        </ul>
                                    @endauth
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @yield('content')

        </div>


        <div id="loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15" />
            </svg>
        </div>

        <script src="{{ asset('content') }}/js/jquery-3.3.1.min.js"></script>
        <script src="{{ asset('content') }}/js/jquery-migrate-3.0.1.min.js"></script>
        <script>eval(mod_pagespeed_Hsg70AQ3Jq);</script>
        <script>eval(mod_pagespeed_zWQ4UTwo1d);</script>
        <script>eval(mod_pagespeed_EEF0rDXZX$);</script>
        <script src="{{ asset('content') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('content') }}/js/owl.carousel.min.js"></script>
        <script>eval(mod_pagespeed_SVFd1d_DJi);</script>
        <script>eval(mod_pagespeed_EFJUD9kbFL);</script>
        <script>eval(mod_pagespeed_NtWsKPNSnZ);</script>
        <script src="{{ asset('content') }}/js/a.js"></script>
        <script>eval(mod_pagespeed_mNWvLuNBZJ);</script>
        <script>eval(mod_pagespeed_o3B38oCEk_);</script>
        <script>eval(mod_pagespeed_MuIxKGdxP7);</script>
        <script src="{{ asset('content') }}/js/jquery.fancybox.min.js"></script>
        <script>eval(mod_pagespeed_wxcTEcDtyL);</script>
        <script>eval(mod_pagespeed_5uEZ5mKeBm);</script>
        <script src="{{ asset('content') }}/js/jquery.mb.YTPlayer.min.js"></script>
        <script>eval(mod_pagespeed_Uzr_TEWEY4);</script>
        <script>eval(mod_pagespeed_gbSFcv3hRK);</script>

        @include('widgets.gtag')

        <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"662eec59684ec4e8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'></script>
    </body>
</html>