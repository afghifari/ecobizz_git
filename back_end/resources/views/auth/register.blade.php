@extends("layouts.app")

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <section class="reg-section1">
            <div id="createAccount">
                <br>
                Membuat Akun Baru <br><br>
            </div>
        </section>

        <section class="reg-section2">
            <div class="reg-mainText">  <bText>1</bText> Informasi Pribadi </div>

        </section>

        <section class="reg-section3">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form id="registerForm">
                <input type="text" name="name" placeholder="Nama" value="{{request()->old('name')}}"> </br>
                <h6>Nama lengkap, berupa huruf tanpa simbol dan angka</h6>
                <input type="text" name="address" placeholder="Alamat" value="{{request()->old('address')}}"></br>
                <h6>Alamat lengkap, tuliskan kecamatan, kelurahan, RT RW jika ada dan kode pos alamat</h6>
                <input type="email" name="email" placeholder="E-mail" value="{{request()->old('email')}}"></br>
                <h6>Email harus valid, misal wahuda.ismail@gmail.com</h6>
                <input type="password" name="password_confirm" placeholder="Password"></br>
                <h6>Password</h6>
                <input type="password" name="password" placeholder="Re-password"></br>
                <h6>Ketik password sekali lagi</h6>
                <input type="tel" name="hp" placeholder="No. Handphone" value="{{request()->old('hp')}}"></br>
                <h6>Nomor Handphone. Misal = 085641234567</h6>
                <input type="tel" name="whatsapp" placeholder="WhatsApp" value="{{request()->old('whatsapp')}}"></br>
                <h6>Masukkan nomor yang Anda gunakan pada WhatsApp (jika ada)</h6>
                <input type="text" name="facebook" placeholder="Facebook" value="{{request()->old('facebook')}}"></br>
                <h6>Nama yang Anda gunakan pada Facebook (jika ada)</h6>
                <input type="text" name="twitter" placeholder="Twitter" value="{{request()->old('twitter')}}"></br>
                <h6>Username Twitter Anda (jika ada)</h6>
        </section>

        <section class="reg-section2">
            <div class="reg-mainText">  <bText>2</bText> Informasi Bisnis</div>
        </section>

        <section class="reg-section5">
                {!! Form::select('kategori', App\Role::pluck('name', 'id'), null, ['class' => 'form-control', 'style' => 'color: #696969; font-size: 14px;'] ) !!}
                <h6>Silahkan pilih peran organisasi atau bisnis anda</h6>
                <input type="text" name="pemilik" placeholder="Nama Organisasi" value="{{request()->old('pemilik')}}"></br>
                <h6>Tuliskan nama organisasi atau bisnis Anda</h6>
                <textarea name="deskripsi" placeholder="Deskripsi">{{request()->old('deskripsi')}}</textarea>
                <h6>Deskripsikan organisasi atau bisnis yang anda jalankan secara singkat, padat, dan jelas</h6>
                <input type="text" name="web" placeholder="Website" value="{{request()->old('web')}}"></br>
                <h6>Berikan alamat website dari organisasi atau bisnis Anda jika ada</h6>
                <textarea name="produk" placeholder="Produk">{{request()->old('produk')}}</textarea>
                <h6>Tuliskan produk apa yang organisasi atau bisnis Anda sediakan</h6>
                <textarea name="kebutuhan" placeholder="Kebutuhan">{{request()->old('kebutuhan')}}</textarea>
                <h6>Tuliskan kebutuhan organisasi atau bisnis Anda</h6>
        </section>

        <section class="reg-section6">
            <input class="registerButton" type="submit" value="REGISTER"><br><br>
        </section>
    </form>

@endsection
