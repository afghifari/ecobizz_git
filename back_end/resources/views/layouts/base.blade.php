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
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .navbar{
            background-color: #00aa44;
            position: fixed;
            width: 100%;
            border: none;
        }
        .bg-transparent{
            background-color: #00aa44;
        }
        .search-barx{
            margin: 0px !important;
            border: solid 1px rgba(0, 0, 0, .1) !important;
            border-radius: 0px !important;
            width: 100% !important;
            border-top-left-radius: 24px !important;
            border-bottom-left-radius: 24px !important;
            transition: 0.5s;
        }

        .search-barx-option{
            border-radius: 0px !important;
            border: none !important;
            margin-left: -20px !important;
            width: unset !important;
            background-color: white !important;
            font-size: 15px !important;
            -webkit-border-radius: 0px !important;
            border-top-right-radius: 0px !important;
            display: inline-block;
        }

        .search-barx-submit{
            border: solid 1px rgba(0, 0, 0, .1) !important;
            border-radius: 0px !important;
            position: relative;
            margin-left: -2px !important;
            width: 24px !important;
            border-top-right-radius: 24px !important;
            border-bottom-right-radius: 24px !important;
            width: unset !important;
        }
        @media only screen and (max-width: 766px) {
            
            .collapsing ul li a, .in ul li a {
                color: #FFFFFF!important;
            }
            .collapsing ul li a:hover, .in ul li a:hover {
                color: #000000 !important;
            }
            .collapsing ul li a:focus, .in ul li a:focus {
                color: #000000 !important;
            }
        }

        .a-footer {
            text-decoration: underline;
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

                <!-- Search Bar -->
                @if (\Auth::user())
                <form class="navbar-form navbar-left" action="/search" method="GET">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control search-barx" placeholder="Cari user atau topik...">
                        <span class="input-group-addon" style="width:0px; padding-left:0px; padding-right:0px; border:none;"></span>
                        <select class="form-control search-barx-option" name="type">
                            <option value="user">
                                User
                            </option>
                            <option value="topik">
                                Topik
                            </option>
                            <option value="grup">
                                Grup
                            </option>
                        </select>
                        <span class="input-group-addon" style="width:0px; padding-left:0px; padding-right:0px; border:none;"></span>
                        <button class="form-control btn btn-default search-barx-submit" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                @endif
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li style="margin-top: 4px;"><a href="/forum">Forum</a></li>
                        <li style="margin-top: 4px;"><a href="{{ route('login') }}" id="bar-login">Login</a></li>
                    @else
                        <li style="margin-top: 4px;"><a href="/forum">Forum</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} &nbsp;
                                <img src="{{Auth::user()->profile_picture }}" style="height: 32px; width: 32px; border-radius: 50%;">
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ '/user/' . Auth::user()->id }}">Profil</a></li>
                                <li><a href="/messagelist">Pesan</a></li>
                                <li><a href="/grouplist">Grup</a></li>
                                @if (Auth::user()->is_admin)
                                    <li><a href="/admin">Admin</a></li>
                                @endif
                                <li class="divider"></li>
                                <li>
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
        var last_scroll = 0;
        var scroll = 0;
        $(window).scroll(function (event) {
            last_scroll = scroll;
            scroll = $(window).scrollTop();
            console.log(scroll);
            if(!window.posx)
                if(last_scroll - scroll > 0){
                    $('.eco-nav').addClass('bg-transparent');
                }else{
                    $('.eco-nav').removeClass('bg-transparent');
                }
            // Do something
        });
    </script>

    @yield('content')

    <section class="section4">
        <div class="container">
            <!-- <div class="row"> -->
                <img src = "/assets/ecobiz_putih.png" height="40" vspace="30px">
                <br>
                <button><img src="/assets/fb.png" height="25"></button>
                <button><img src="/assets/twitter.png" height="25"></button>
                <button><img src="/assets/linkedin.png" height="25"></button>
                <button><img src="/assets/gplus.png" height="25"></button>
                <br>
            <!-- </div> -->
            <div class="row">
                <div class="col-xs-4">
                    <div class="footer-sect">Site Map
                        <br>
                        <a href="/" class="a-footer">Home</a><br>
                        <a href="forum" class="a-footer">Forum</a><br>
                        <a href="register" class="a-footer">Daftar</a><br>
                        <a href="login" class="a-footer">Login</a>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="footer-sect">Kontak
                        <br>
                        <div class="footer">
                            Ecobiz KUKM Jawa Barat<br>
                            Jalan Ganesha No. 12<br>
                            Bandung, Jawa Barat<br>
                            40135<br>
                            ☎ (022) 2500935
                        </div>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="footer-sect">Mitra Utama
                        <br>
                        <a href="http://www.kemendag.go.id/" class="a-footer">Kementrian Perdagangan</a><br>
                        <a href="http://inatrade.kemendag.go.id" class="a-footer">Inatrade</a><br>
                        <a href="http://www.insw.go.id" class="a-footer">INSW</a><br>
                        <a href="http://eservice.insw.go.id" class="a-footer">INTR</a><br>
                        <a href="http://dekopinwil-jabar.blogspot.com/" class="a-footer">Dekopinwil Jabar</a><br>
                        <a href="http://dekopinwiljabar.org/koperasi/" class="a-footer">Jaringan Usaha Koperasi</a><br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

