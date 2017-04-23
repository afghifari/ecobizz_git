@extends('layouts.base')

@section('content')
    <header id="header">
        <div class="start">
            <b><div style="font-size:70px">KUKM</div></b>
            <br>
            <div style="font-size:20px">Membangun ekosistem bisnis dengan berbagi informasi</div>
        </div>
        <br>
        @if (Auth::guest())
            <center><button class="button1" onclick="window.location.href='/register'">JOIN US</button></center>
        @endif
        <br>
        <div class="down-button">
            <center><button class="button1" style="border:none" onclick="location.href='#ecobiz'"><img src="/assets/down_arrow.png"></button></center>
        </div>
    </header>

    <section class="section1" id="ecobiz">
        <img src = "/assets/ecobiz_hitam.png" height="40" vspace="30px" style="margin-top: 50px">
        <center><p>
            Donec eget ullamcorper dolor. Maecenas sed libero aliquam, aliquet nunc quis, ornare ex. Integer sit amet turpis vestibulum, aliquet tortor et, blandit risus. Duis vestibulum augue quis luctus rutrum. Nulla porta non ligula nec iaculis. Aliquam sed felis viverra, dictum massa in, faubicus lacus. Sed eleifend, est nec scelerisque ullamcorper, augue velit, tempor lectus, non hendrerit tortor augue eget nibh. Aenean at condimentum ligula. Donec a metus at nunc viverra pellentesque.
        </p></center>
        <hr>


        <div class = "container1">
            <div id="number">207
            <div class="category"><br>Anggota Terdaftar</div>
            </div>
            <div id="number">57
            <div class="category"><br>Grup Agribisnis</div>
            </div>
            <div id="number">61
            <div class="category"><br>Topik Forum</div>
            </div>
        </div>
        <center>
        <p style="margin-bottom: 10px;">Daftarkan diri / organisasi Anda dan mulailah membangun agribisnis Jabar dengan seluruh anggota kami</p>
        </center>
        <img src = "/assets/circles.png" vspace="10px" style="margin-bottom: 50px">
    </section>

    <section class="section2">
        <div class="title">BERGABUNGLAH DENGAN KAMI DAN MULAILAH <b>BERINTERAKSI</b></div>
        <center><p style="color: white; font-size: 18px; margin-bottom: 40px">Mulai dari pemilik tanah hingga retailer, pemerintah hingga universitas, organisasi bantuan finantsial hingga bantuan hukum, semuanya adalah anggota potensial untuk platform Ecobiz KUKM Jawa Barat. Kenalilah setiap aktor bisnis - profil, lingkup usaha, dan kebutuhan - dan mulailah berinteraksi untuk membangun ekosistem bisnis Jawa Barat.</p></center>
        @if (Auth::guest())
            <button class="button2" onclick="location.href='register'">JOIN US</button>
        @endif
    </section>

    <section class="section3">
        <div class="title">
            FITUR UTAMA PLATFORM ECOBIZ KUKM JAWA BARAT
        </div>

        <div class="container2">
            <div id="feature"> Profil Pelaku Bisnis<br>
                <div class="feature-expl">Kenali dan carilah setiap pelaku bisnis Jawa Barat mulai dari profil, lingkup usaha, alamat, kebutuhan, dan kontak mereka
                </div>
            </div>

            <div id="feature"> Interaksi Ekosistem Bisnis
                <div class="feature-expl">Fasilitas untuk memulai percakapan pribadi, membuat persetujuan dan untuk bekerja sama, dan membuat grup untuk keberjalanan ekosistem bisnis Anda
                </div>
            </div>

            <div id="feature"> Forum
                <div class="feature-expl">Ecobiz KUKM Jawa Barat didukung oleh forum yang kuat tempat Anda bertanya dan berbagi apa saja dengan seluruh anggota platform<br><br>
                <button class="button1" style="margin-top: 0; margin-left: 0;" onclick="window.location.href='/forum'">FORUM</button>
                </div>
            </div>

            <div id="feature"> Menyerupai Facebook & Kaskus
                <div class="feature-expl">Apabila Anda pernah menggunakan sosmed Facebook & forum Kaskus, Ecobiz KUKM Jawa Barat menggabungkan keunggulan keduanya untuk interaksi Anda
                </div>
            </div>
        </div>
    </section>

    <section class="section1">
        <img src = "/assets/quote.png" height="40" vspace="30px" style="margin-top: 50px">
        <center><p style="margin-bottom: 10px">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p></center>
        <center><p><b>John Smith</b> - PT LAPI ITB</p></center>
        <hr>
        <div class="title">PARTNER KAMI</div>
        <a href="http://dekopinwiljabar.org/koperasi" target="blank"><img src = "/assets/logo_koperasi.png" height="110" vspace="30px" style="margin-top: 50px; margin-bottom: 100px;"></a>
        <a href="http://www.sbm.itb.ac.id/" target="blank"><img src = "/assets/logo_sbm.png" height="100" vspace="30px" style="margin-top: 50px; margin-bottom: 100px;"></a>
    </section>

@endsection
