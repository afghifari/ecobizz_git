@extends('layouts.app')

@section('content')

    <section class="section1">
        <div id="profile">
            Edit Profile
            <div style="float:right;" align="right">
                <input type="submit" name="Save" value="SAVE" class="button1">
            </div>
        </div>
    </section>

    <section class="section2">
        <div class="container2">
            <div id="user">
                <center>
                    <img src="../design/assets/circle.png" height="120px" style="margin-top: 60px;"><br>
                    <!-- <button class = "button2"> change </button> -->
                    <input type="file" name="photo" id="photo" class="button2" />
                    <label for="photo">change</label>
                </center>

                <div style="font-size: 14px;">
                    <form id="editProfile">
                        <input type="text" name="name" placeholder="Nama"> </br>
                        <input type="text" name="address" placeholder="Alamat"></br>
                        <input type="text" name="email" placeholder="E-mail"></br>
                        <input type="text" name="hp" placeholder="No. Handphone"></br>
                </div>
            </div>

            <div id="organizationName">
                <input type="text" name="organizationName" placeholder="Nama Organisasi" style="width: 600px;"></br>
            </div>

            <div id="organizationImage">
                <input type="file" name="organizationImage" id="organizationImage" class="button3" />
                    <label for="organizationImage">upload struktur organisasi</label>
                <br>
                GAMBAR
            </div>

            <div id="organizationProfile">
                <input type="textarea" name="deskripsi" placeholder="Deskripsi"> </br>
                <input type="text" name="kategori" placeholder="Kategori" style="width: 600px;"> </br>
                <input type="text" name="pemilik" placeholder="Pemilik" style="width: 600px;"></br>
                <input type="text" name="website" placeholder="Website" style="width: 600px;"></br>
            </div>
            </form>
        </div>
        <div style="clear:both;"><br>
        <input type="submit" name="Save" value="Save" class="button4">
    </section>


@endsection
