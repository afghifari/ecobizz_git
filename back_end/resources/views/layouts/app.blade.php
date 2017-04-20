<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

     <!-- Plugin CSS -->
    <link href="../css/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="/css/creative.css">
    <link rel="stylesheet" href="/css/profile.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/register.css">
<style type="text/css">
    body{

      overflow-x: hidden !important;
    }
    #login {
      background: url('/assets/bg1.png') no-repeat;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      padding: 10px;
      height: 100vh !important;
    }

    #login .header-content .header-content-inner p1 {
      font-weight: 500;
      margin-top: 0;
      margin-bottom: 0;
      font-size: 30px;
      color: white;
    }

    input[type=text], select {
        width: 40%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        color: black;
        box-sizing: border-box;
    }
    input[type=submit] {
        color: #FFFFFF;
        font-size: 14px;
        background-color: transparent;
        text-decoration: none;
        padding: 10px 40px;
        margin-top: 10px;
        margin-right: 30px;
        margin-left: 10px;
        border-radius: 8px;
        border:2px solid #FFFFFF;
    }
    input[type=submit]:hover {
        cursor: pointer;
        color: #000000;
        border:2px solid #000000;
    }

                                #bar-login{
                                    padding: 8px 12px;
                                    border: solid 1px rgba(255, 255, 255, .5);
                                    margin-top: 5px;
                                    border-radius: 4px;
                                }
                                #bar-register{
                                    padding: 8px 12px;
                                    border: solid 1px rgba(255, 255, 255, .5);
                                    margin-top: 5px;
                                    border-radius: 4px;
                                    margin-left: 5px;
                                }
</style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <style type="text/css">
        .navbar{
            background-color: #00aa44;
            position: fixed;
            width: 100%;
            border: none;
        }
        .bg-transparent{
            background-color: transparent !important;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top eco-nav">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/img/ecobiz_putih.png" style="height: 100%;">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="/forum">Forum</a></li>
                            <li><a href="#">Apa itu Ecobiz</a></li>
                            <li><a href="{{ route('login') }}" id="bar-login">Login</a></li>
                            <!-- <li><a href="{{ route('register') }}" id="bar-register">Register</a></li> -->
                        @else
                            <li style="margin-top: 4px;"><a href="/forum">Forum</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} &nbsp;
                                    <img src="{{Auth::user()->profile_picture}}" style="height: 32px; width: 32px; border-radius: 50%;">
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ '/user/' . Auth::user()->id }}">Profile</a>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <script type="text/javascript" src="/lib/jquery/jquery.min.js"></script>
        <script type="text/javascript">
            if(!window.posx)
                $('.eco-nav').addClass('bg-transparent');

            $(window).scroll(function (event) {
                var scroll = $(window).scrollTop();
                console.log(scroll);
                if(!window.posx)
                    if(scroll == 0){
                        $('.eco-nav').addClass('bg-transparent');
                    }else{
                        $('.eco-nav').removeClass('bg-transparent');
                    }
                // Do something
            });
        </script>
        @yield('content')
    </div>

    <section class="section4">
        <img src = "/assets/ecobiz_putih.png" height="40" vspace="30px" style="margin-top: 50px">
        <br>
        <button><img src="/assets/fb.png" height="25"></button>
        <button><img src="/assets/twitter.png" height="25"></button>
        <button><img src="/assets/linkedin.png" height="25"></button>
        <button><img src="/assets/gplus.png" height="25"></button>
        <br>
        <div class = "container3">
            <div id="footer-sect">Site Map
                <br>
                <a href="/">Home</a><br>
                <a href="">Tentang</a><br>
                <a href="forum">Forum</a><br>
                <a href="register">Daftar</a><br>
                <a href="login">Login</a>
            </div>
            <div id="footer-sect-center">Kontak
                <br>
                <div class="footer">
                    Ecobiz KUKM Jawa Barat<br>
                    Jalan Ganesha No. 12<br>
                    Bandung, Jawa Barat<br>
                    40135<br>
                    ☎ 022 - 11111
                </div>
            </div>
            <div id="footer-sect">Fitur Utama
                <br>
                <div class="footer">
                    Profil Pelaku Bisnis<br>
                    Interaksi Ekosistem Bisnis<br>
                    Forum<br>
                    Menyerupai Facebook<br>
                    & Kaskus
                </div>
            </div>
        </div>
        <div style="clear: both;">
        <br><br>
        Copyright © 2017 Ecobiz KUKM Jabar
        </div>
    </section>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
