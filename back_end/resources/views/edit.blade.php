@extends('layouts.base')

@section('content')
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/creative.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/editprofile.css')}}">

    <style type="text/css">
        .navbar{
            background-color: #00aa44;
            position: fixed;
            width: 100%;
            border: none;
        }
        .bg-transparent{
            background-color: #00aa44 !important;
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
            Edit Profile
            <div style="float:right;" align="right">
                <input type="submit" name="Save" value="SAVE" class="button1">
            </div>
        </div>
    </section>

    <section class="editprofile-section2">
        <div class="container2">
            <div id="user">
                <center>
                    <img id="image" src="{{$user->profile_picture}}" height="120px" style="margin-top: 60px;"><br>
                    <input type="file" name="photo" id="photo" class="button2" onchange="readURL(this);" />
                    <label for="photo">change</label>
                </center>

                <div style="font-size: 14px;">
                    <form id="editProfile">
                        <input type="text" name="name" placeholder="Nama" value="{{ $user->name }}"> </br>
                        <input type="text" name="address" placeholder="Alamat" value="{{ $user->address }}"></br>
                        <input type="text" name="email" placeholder="E-mail" value="{{ $user->email }}"></br>
                        <input type="text" name="hp" placeholder="No. Handphone" value="{{ $user->mobile_number }}"></br>
                </div>
            </div>

            <div id="organizationName">
                <input type="text" name="organizationName" placeholder="Nama Organisasi" style="width: 600px;" value="{{$user->organization_name}}"></br>
            </div>

            <div id="organizationImage">
                <input type="file" name="organizationImage" id="organizationImage" class="button3" />
                    <label for="organizationImage">upload struktur organisasi</label>
                <br>
            </div>

            <div id="organizationProfile">
                <input type="textarea" name="deskripsi" placeholder="Deskripsi" value="{{$user->description}}"> </br>
                {!! Form::select('kategori', App\Role::pluck('name', 'id'), $user->role_id, ['class' => 'form-control'] ) !!}
                <input type="text" name="pemilik" placeholder="Pemilik" style="width: 600px;" value="{{ $user->owner }}"></br>
                <input type="text" name="website" placeholder="Website" style="width: 600px;" value="{{ $user->website }}"></br>
                <input type="text" name="kebutuhan" placeholder="Kebutuhan" style="width: 600px;" value="{{ $user->needs }}"></br>
            </div>
            </form>
        </div>
        <div style="clear:both;"><br>
        <input type="submit" name="Save" value="Save" class="button4">
    </section>

@endsection
