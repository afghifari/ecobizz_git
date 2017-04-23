@extends("layouts.app")

@section('content')
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">

    <header id="login">
        <div class="header-content">
            <div class="header-content-inner">
               @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <br><br>
                <form action='/login' method='post'>
                    <input type="text" id="fname" name="email" placeholder="E-mail"> </br>
                    <input type="password" id="paswod" name="password" placeholder="Password"></br></br>
                    <input type="submit" value="Login">
                </form>
                </br></br></br></br>
                <p1>Belum punya akun?
                    <a class="linkregister" href="/register">
                        Daftar </br>
                    </a>
                </p1>

            </div>
        </div>
    </header>
@endsection
