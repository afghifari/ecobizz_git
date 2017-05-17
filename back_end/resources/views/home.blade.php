@extends('layouts.base')

@section('content')
    <section id="header">
        <br><br><br><br>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        <div class="start">
            <b><div style="font-size:70px">KUKM</div></b>
            <br>
            <div style="font-size:20px">Membangun ekosistem bisnis dengan berbagi informasi</div>
        </div>
        <br>
        @if (Auth::guest())
            <center><button class="button1" onclick="window.location.href='/register'">BERGABUNG</button></center>
        @endif
        <br>
        <div class="down-button">
            <center><button class="button1" style="border:none" onclick="location.href='#ecobiz'"><img src="/assets/down_arrow.png"></button></center>
        </div>
    </section>

    <section class="section1" id="ecobiz">
        <div class="container">
            <div class="row">
                <img src = "/assets/ecobiz_hitam.png" height="40" vspace="30px" style="margin-top: 50px">
            </div>
            <div class="row">
                <center><p>
                    Setahun yang lalu saya merasa kesulitan untuk mencari pengolah kopi yang juga menyediakan jasa transport dari perkebunan ke pabrik pengolahan kopi. Suatu saat saya mencoba bergabung dengan KUKM Ecobiz dan menulis kebutuhan saya, dan tidak lama ada sebuah perusahaan pengolah kopi yang menghubungi saya yang menyediakan jasa transport yang saya butuhkan dengan harga beli yang lebih stabil. Hingga saat ini saya masih bekerja sama dengan perusahaan tersebut. Saya menghimbau seluruh petani kopi dapat bergabung dalam KUKM Ecobiz ini.<br><br>
                    <b>Dede</b> - Petani Kopi di Gunung Halu
                </p></center>
                <hr>
            </div>

            <div class="row">
                <div class="col-xs-4">
                    <div id="number">{{ count(App\User::all()) }}</div>
                    <div class="category">Anggota Terdaftar</div>
                </div>
                <div class="col-xs-4">
                    <div id="number">57</div>
                    <div class="category">Grup Agribisnis</div>
                </div>
                <div class="col-xs-4">
                    <div id="number">{{count(App\Thread::all())}}</div>
                    <div class="category">Topik Forum</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <p>Daftarkan diri / organisasi Anda dan mulailah membangun agribisnis Jabar dengan seluruh anggota kami</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section2">
        <div class="title">BERGABUNGLAH DENGAN KAMI DAN MULAILAH <b>BERINTERAKSI</b></div>
        <center><p style="color: white; font-size: 18px; margin-bottom: 40px">Mulai dari pemilik tanah hingga retailer, pemerintah hingga universitas, organisasi bantuan finantsial hingga bantuan hukum, semuanya adalah anggota potensial untuk platform Ecobiz KUKM Jawa Barat. Kenalilah setiap aktor bisnis - profil, lingkup usaha, dan kebutuhan - dan mulailah berinteraksi untuk membangun ekosistem bisnis Jawa Barat.</p></center>
        @if (Auth::guest())
            <button class="button2" onclick="location.href='register'">BERGABUNG</button>
        @endif
    </section>
    
    <section class="section3">
        <div class="container">
            <div class="row">
                <div class="title">
                    FITUR UTAMA PLATFORM ECOBIZ KUKM JAWA BARAT
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3">
                    <div class="feature">
                        Profil Pelaku Bisnis<br>
                        <div class="feature-expl">Kenali dan carilah setiap pelaku bisnis Jawa Barat mulai dari profil, lingkup usaha, alamat, kebutuhan, dan kontak mereka</div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="feature">
                        Interaksi Ekosistem Bisnis<br>
                        <div class="feature-expl">Fasilitas untuk memulai percakapan pribadi, membuat persetujuan dan untuk bekerja sama, dan membuat grup untuk keberjalanan ekosistem bisnis Anda</div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="feature">
                        Forum<br>
                        <div class="feature-expl">Ecobiz KUKM Jawa Barat didukung oleh forum yang kuat tempat Anda bertanya dan berbagi apa saja dengan seluruh anggota platform<br><br>
                        <button class="button1" style="margin-top: 0; margin-left: 0;" onclick="window.location.href='/forum'">FORUM</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="feature">
                        Menyerupai Facebook & Kaskus<br>
                        <div class="feature-expl">Apabila Anda pernah menggunakan sosmed Facebook & forum Kaskus, Ecobiz KUKM Jawa Barat menggabungkan keunggulan keduanya untuk interaksi Anda</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section1">
        <img src = "/assets/quote.png" height="40" vspace="30px" style="margin-top: 50px">
        <center><p style="margin-bottom: 10px">
            Kami mengalami masalah di mana buah-buahan kami hampir selalu ditolak oleh retailer dengan alasan melebihi permintaan konsumen. Terpaksa kami menjual buah-buahan yang berlebih ke pasar tradisional namun dengan biaya transportasi yang lebih tinggi. Salah satu anggota kami menyarankan untuk mendaftar sebagai anggota KUKM Ecobiz dan ternyata retailer tersebut juga adalah anggota KUKM Ecobiz. Di sana retailer tersebut dengan rinci menjelaskan berapa kebutuhan buah-buahan yang dibutuhkan. Informasi ini sangat berguna bagi kami sehingga kami dapat menanam komoditas selain buah-buahan sebagai ganti hasil panen buah-buahan yang berlebih.
        </p></center>
        <center><p><b>Untung</b> - Koperasi Buah Eksotis</p></center>
        <hr>
        <div class="title">PARTNER KAMI</div>
        <a href="http://dekopinwiljabar.org/koperasi" target="blank"><img src = "/assets/logo_koperasi.png" height="110" vspace="30px" style="margin-top: 50px; margin-bottom: 100px;"></a>
        <a href="http://www.sbm.itb.ac.id/" target="blank"><img src = "/assets/logo_sbm.png" height="100" vspace="30px" style="margin-top: 50px; margin-bottom: 100px;"></a>
    </section>

@endsection
