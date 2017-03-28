<!DOCTYPE html>
<html>
<head>
    <title>KUKM Ecobiz</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

     <!-- Plugin CSS -->
    <link href="css/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="css/creative.css">
    <link rel="stylesheet" href="css/Homepage.css" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet">

     <!-- Plugin CSS -->
    <link href="css/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="css/creative.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="/assets/ecobiz_putih.png" width="35%">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Forum</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Apa itu Ecobiz?</a>
                    </li>
                    <li>
                        @if (Auth::user())
                            <button class="button1" style="float:right" onclick="location.href='logout'">LOGOUT</button>
                        @else
                            <button class="button1" style="float:right" onclick="location.href='login'">LOGIN</button>
                        @endif
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    @if (Auth::user())
        Logged In as {{ Auth::user()->name }}
    @else
        Not Logged in
    @endif

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
                <a href="Homepage.html">Home</a><br>
                <a href="">Tentang</a><br>
                <a href="">Forum</a><br>
                <a href="register.html">Daftar</a><br>
                <a href="login.html">Login</a>
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
</body>
</html>

