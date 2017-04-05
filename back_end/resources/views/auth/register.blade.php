@extends("layouts.app")

@section('content')

    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <section class="reg-section1">
            <div id="createAccount">
                <br><br>
                Create a New Account <br><br>
            </div>
        </section>

        <section class="reg-section2">
            <div class="reg-mainText">  <bText>1</bText> Personal Information </div>
        </section>

        <section class="reg-section3">
            <form id="registerForm">
                <input type="text" name="name" placeholder="Nama"> </br>
                <h6>Nama lengkap, berupa huruf tanpa simbol dan angka</h6><br>
                <input type="text" name="address" placeholder="Alamat"></br>
                <h6>Alamat lengkap, tuliskan kecamatan, kelurahan, RT RW jika ada dan kode pos alamat</h6><br>
                <input type="email" name="email" placeholder="E-mail"></br>
                <h6>Email harus valid, misal wauda@itb.com</h6><br>
                <input type="password" name="password_confirm" placeholder="Password"></br>
                <h6>Password</h6><br>
                <input type="password" name="password" placeholder="Re-password"></br>
                <h6>Re-password</h6><br>
                <input type="text" name="hp" placeholder="No. Handphone"></br>
                <h6>Nomor Handphone. Misal = 085641234567</h6>
        </section>

        <section class="reg-section2">
            <div class="reg-mainText">  <bText>2</bText> Business Section</div>
        </section>

        <section class="reg-section5">
                {!! Form::select('kategori', App\Role::pluck('name', 'id'), null, ['class' => 'form-control input-lg'] ) !!}
                <h6>Silahkan pilih peran organisasi anda</h6><br>
                <textarea name="deskripsi" placeholder="Deskripsi"></textarea>
                <h6>Deskripsikan bisnis yang anda jalankan secara singkat, padat, dan jelas</h6><br>
                <input type="text" name="pemilik" placeholder="Pemilik"></br>
                <h6>Tuliskan nama pemilik bisnis tersebut, jika anda adalah pemiliknya maka tuliskan nama anda sendiri</h6><br>
                <input type="text" name="web" placeholder="Website"></br>
                <h6>Berikan alamat website dari bisnis Anda jika ada</h6><br>
        </section>

        <section class="reg-section2">
            <div class="reg-mainText"> <bText>3</bText> Confirmation</div>
        </section>

        <section class="reg-section6">
            <input type="checkbox" name="info" value="information">  My information is correct </br></br>
            <input type="checkbox" name="tnc" value="tnc">  I have read the Terms and Condition </br></br>
            <input class="registerButton" type="submit" value="REGISTER">
            </form>
        </section>
    </form>

@endsection
