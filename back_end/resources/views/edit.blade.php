@extends('layouts.base')

@section('content')
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/creative.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/editprofile.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    </style>

    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image')
                    .attr('src', e.target.result)
                    .width("120px")
                    .height("120px");
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    {!! Form::open(['method' => 'post', 'url' => url('user/'.$user->id."/edit"), 'files' => true]) !!}

	<section class="editprofile-section1">
        <div id="profile">
            Edit Profil
        </div>
    </section>

    <section class="editprofile-section2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="user">
                        <center>
                            <img id="image" src="{{$user->profile_picture}}" height="120px" style="margin-top: 60px;"><br>
                            <input type="file" name="photo" id="photo" class="button2" onchange="readURL(this);" />
                            <label for="photo">change</label>
                        </center>

                        <div style="font-size: 14px;">
                            <form id="editProfile">
                                Nama: <input type="text" name="name" placeholder="Nama" value="{{ $user->name }}"> </br></br>
                                Alamat: <input type="text" name="address" placeholder="Alamat" value="{{ $user->address }}"></br></br>
                                E-mail: <input type="email" name="email" placeholder="E-mail" value="{{ $user->email }}"></br></br>
                                No. Handphone: <input type="tel" name="hp" placeholder="No. Handphone" value="{{ $user->mobile_number }}"></br></br>
                                Whatsapp: <input type="tel" name="whatsapp" placeholder="WhatsApp" value="{{ $user->whatsapp_number }}"></br></br>
                                Facebook: <input type="text" name="facebook" placeholder="Facebook" value="{{ $user->facebook_id }}"></br></br>
                                Twitter: <input type="text" name="twitter" placeholder="Twitter" value="{{ $user->twitter_id }}"></br></br>
                        </div>
                    </div>
                    <br><br>
                </div>

                <div class="col-md-6">
                    <div id="organizationName">
                        <input type="text" name="organizationName" placeholder="Nama Organisasi" value="{{$user->organization_name}}"></br>
                    </div>

                    <div id="organizationImage">
                        <input type="file" name="organizationImage" id="organizationImage" class="button3" />
                            <label for="organizationImage">upload struktur organisasi</label>
                        <br>
                    </div>

                    <div id="organizationProfile">
                        Deskripsi: 
                        <textarea placeholder="Deskripsi" name="deskripsi">{{$user->description}}</textarea></br></br>
                        Kategori: {!! Form::select('kategori', App\Role::pluck('name', 'id'), $user->role_id, ['class' => 'form-control'] ) !!}</br>
                        Pemilik: <input type="text" name="pemilik" placeholder="Pemilik" value="{{ $user->owner }}"></br></br>
                        Website: <input type="url" name="website" placeholder="Website" value="{{ $user->website }}"></br></br>
                        Kebutuhan: <input type="text" name="kebutuhan" placeholder="Kebutuhan" value="{{ $user->needs }}"></br></br>
                        Produk: <input type="text" name="produk" placeholder="Produk" value="{{ $user->products }}"></br></br>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <br><br>
                <input type="submit" name="Save" value="Save" class="button4">
                </form>
            </div>
            
        </div>
    </section>

@endsection
