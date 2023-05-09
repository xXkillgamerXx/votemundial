<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Wed May 03 2023 23:58:42 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6448b25f42b9e764a2cb9d29" data-wf-site="6448b25f42b9e7c807cb9d28">
<head>
    <meta charset="utf-8">
    <title>Ronny&#x27;s Amazing Site</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/ronnys-amazing-site-c03566.webflow.css') }}" rel="stylesheet" type="text/css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('images/webclip.png') }}" rel="apple-touch-icon">
</head>
<body class="body">
<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="w-container">
        <a href="#" class="w-nav-brand">
            <h2 class="heading">MTKSAR</h2>
        </a>
        <nav role="navigation" class="w-nav-menu">
            <a href="{{ route('home') }}" aria-current="page" class="w-nav-link w--current">Go to Vote</a>
        </nav>
        <div class="w-nav-button">
            <div class="w-icon-nav-menu"></div>
        </div>
    </div>
</div>
<div id="app">
    <div class="w-container">
        <div class="columns w-row">
            <div class="column-2 w-col w-col-4">
                @guest()
                    <div class="card">
                        <div class="div-block">
                            <div class="div-block-5">
                                <div class="w-embed">
                                    <svg width="75" version="1.1" id="Capa_1" viewbox="0 0 464 42" xml:space="preserve" sodipodi:docname="icon.svg" height="65" inkscape:version="1.2.2 (732a01da63, 2022-12-09)" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                                    <sodipodi:namedview id="namedview21" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" showgrid="false" inkscape:zoom="5.2606306" inkscape:cx="14.82712" inkscape:cy="22.905999" inkscape:window-width="1920" inkscape:window-height="1080" inkscape:window-x="1920" inkscape:window-y="0" inkscape:window-maximized="1" inkscape:current-layer="Capa_1"></sodipodi:namedview>
                                        <g id="g18" transform="translate(0,-209.88)">
                                            <polygon points="0,156 232,428 128.889,156 " id="polygon2" style="fill: rgb(130, 200, 220);"></polygon>
                                            <polygon points="335.111,156 232,428 464,156 " id="polygon4" style="fill: rgb(180, 230, 240);"></polygon>
                                            <polygon points="232,36 128.889,156 232,156 335.111,156 " id="polygon6" style="fill: rgb(217, 255, 255);"></polygon>
                                            <polygon points="232,428 335.111,156 232,156 128.889,156 " id="polygon8" style="fill: rgb(160, 220, 230);"></polygon>
                                            <polygon points="104,36 0,156 128.889,156 " id="polygon10" style="fill: rgb(160, 220, 230);"></polygon>
                                            <polygon points="464,156 360,36 335.111,156 " id="polygon12" style="fill: rgb(235, 255, 255);"></polygon>
                                            <polygon points="360,36 232,36 335.111,156 " id="polygon14" style="fill: rgb(180, 230, 240);"></polygon>
                                            <polygon points="232,36 104,36 128.889,156 " id="polygon16" style="fill: rgb(180, 230, 240);"></polygon>
                                        </g>
                            </svg>
                                </div>
                                <p class="paragraph">Sign up to enter various events and meet Fam friends.</p>
                                <div>
                                    <a href="{{ route('login') }}" class="button-2 w-button">Login</a>
                                    <a href="{{ route('register') }}" class="button-2-copy w-button">Sign up</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="card">
                        <div class="div-block">
                            <img src="{{ auth()->user()->avatar_url != null ? auth()->user()->avatar_url : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWZmD0OAk5mVwFPkSGu3klSYjR3YKbq0jKsIJRRZM&s' }}" loading="lazy" width="65" sizes="65px" alt="" class="image">
                            <div>
{{--                                <strong>LV1</strong>--}}
                                {{ auth()->user()->name }}
                            </div>
                            <a class="button w-button" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
            </div>
            <div class="column w-col w-col-8">
                @yield('content')
            </div>
        </div>

        @yield('modal')
    </div>
</div>

<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6448b25f42b9e7c807cb9d28" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>

@yield('js')
