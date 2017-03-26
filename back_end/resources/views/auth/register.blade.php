<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ecobizz - Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

     <!-- Plugin CSS -->
    <link href="css/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="css/creative.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="/">
                    <img src="assets/ecobiz_putih.png" width="35%">
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
                        <a href="/">
                            <button class="button1" style="float:right">LOGIN</button>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section class="section1">
        <div id="createAccount">
            <br><br>
            Create a New Account <br><br>
        </div>
    </section>

    <section class="section2">
        <div class="mainText">  <bText>1</bText> Personal Information </div>
    </section>

    <section class="section3">
        <form id="registerForm" method="post" action="/register">
            <input type="text" name="name" placeholder="Nama"> </br>
            <h6>Nama lengkap, berupa huruf tanpa simbol dan angka</h6><br>
            <input type="text" name="address" placeholder="Alamat"></br>
            <h6>Alamat lengkap, tuliskan kecamatan, kelurahan, RT RW jika ada dan kode pos alamat</h6><br>
            <input type="text" name="email" placeholder="E-mail"></br>
            <h6>Email harus valid, misal wauda@itb.com</h6><br>
            <input type="text" name="hp" placeholder="No. Handphone"></br>
            <h6>Nomor Handphone. Misal = 085641234567</h6>
    </section>

    <section class="section2">
        <div class="mainText">  <bText>2</bText> Business Section</div>
    </section>

    <section class="section5">
            <input type="text" name="kategori" placeholder="Kategori"> </br>
            <h6>Nama lengkap, berupa huruf tanpa simbol dan angka</h6><br>
            <textarea name="deskripsi" form="registerForm" placeholder="Deskripsi"></textarea>
            <h6>Deskripsikan bisnis yang anda jalankan secara singkat, padat, dan jelas</h6><br>
            <input type="text" name="pemilik" placeholder="Pemilik"></br>
            <h6>Tuliskan nama pemilik bisnis tersebut, jika anda adalah pemiliknya maka tuliskan nama anda sendiri</h6><br>
            <input type="text" name="web" placeholder="Website"></br>
            <h6>Berikan alamat website dari bisnis Anda jika ada</h6><br>
            <input type="text" name="strukturOrg" placeholder="Struktur Organisasi"></br>
            <h6>what the hulk is this ?</h6>
    </section>

    <section class="section2">
        <div class="mainText"> <bText>3</bText> Confirmation</div>
    </section>

    <section class="section6">
        <input type="checkbox" name="info" value="information">  My information is correct </br></br>
        <input type="checkbox" name="tnc" value="tnc">  I have read the Terms and Condition </br></br>
        <input class="registerButton" type="submit" value="REGISTER">
        </form>
    </section>

    <section class="section4">
        <img src = "assets/ecobiz_putih.png" height="40" vspace="30px" style="margin-top: 50px">
        <br>
        <button><img src="assets/fb.png" height="25"></button>
        <button><img src="assets/twitter.png" height="25"></button>
        <button><img src="assets/linkedin.png" height="25"></button>
        <button><img src="assets/gplus.png" height="25"></button>
        <br>
        <div class = "container3">
            <div id="footer-sect">Site Map
                <br>
                <a href="">Home</a><br>
                <a href="">Tentang</a><br>
                <a href="">Forum</a><br>
                <a href="">Daftar</a><br>
                <a href="">Login</a>
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
