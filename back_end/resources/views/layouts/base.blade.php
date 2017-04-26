<!DOCTYPE html>
<html>
<head>
    <title>KUKM Ecobiz</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

     <!-- Plugin CSS -->
    <link href="css/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="/css/creative.css">
    <link rel="stylesheet" href="/css/Homepage.css" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet">

     <!-- Plugin CSS -->
    <link href="/css/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="/css/creative.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <style type="text/css">
        .navbar{
            background-color: #00aa44;
            position: fixed;
            width: 100%;
            border: none;
        }
        .bg-transparent{
            background-color: #00aa44 !important;
        }

        .searchbar {
            size: 100;
            height: 30px;
            vertical-align: middle;
        }

        .radio-inline {
            color: #FFFFFF;
            text-transform: uppercase;
        }

        .btn {
            border-radius: 0;
        }
    </style>
</head>
<body>
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
                        &nbsp;&nbsp;&nbsp;
                    </ul>

                    <!-- Search Bar -->
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Cari user atau topik...">
                        </div>
                        <button type="submit" class="btn btn-default">Cari</button>
                        <label class="radio-inline"><input type="radio" name="optradio" checked>User</label>
                        <label class="radio-inline"><input type="radio" name="optradio">Topik</label>  
                    </form>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="/forum">Forum</a></li>
                            <li><a href="#">Apa itu Ecobiz</a></li>
                            <style type="text/css">
                                #bar-login{
                                    padding: 8px 12px;
                                    border: solid 1px rgba(255, 255, 255, .5);
                                    margin-top: 5px;
                                    border-radius: 4px;
                                }
                            </style>
                            <li><a href="{{ route('login') }}" id="bar-login">Login</a></li>
                        @else
                            @if (Auth::user()->is_admin)
                                <li style="margin-top: 4px;"><a href="/admin">Admin</a></li>
                            @endif
                            <li style="margin-top: 4px;"><a href="/forum">Forum</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} &nbsp;
                                    <img src="{{Auth::user()->profile_picture }}" style="height: 32px; width: 32px; border-radius: 50%;">
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

