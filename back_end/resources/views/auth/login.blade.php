@extends("layouts.base")

@section('content')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <p1>Get in to Your Account </p1> </br> </br> </br>
                <form action='/login' method='post'>
                    <input type="text" id="fname" name="email" placeholder="E-mail"> </br>
                    <input type="text" id="paswod" name="password" placeholder="Password"></br></br>
                    <input type="submit" value="Login">
                </form>
                </br></br></br></br>
                <p1>Don't have account yet?
                    <a class="linkregister" href="/register">
                        Register </br>
                    </a>
                </p1>

            </div>
        </div>
    </header>

@endsection
