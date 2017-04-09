@extends('layouts.app')

@section('content')

    <section class="section1">
        <div id="profile">
            Profile
            @if (Auth::user()->id == $user->id)
                <div style="float:right;" align="right">
                    <button class="button1">
                        EDIT
                    </button>
                </div>
            @endif
        </div>
    </section>

    <section class="section2">
        <div class="container2">
            <div id="activities">
                <center>
                    <img src="{{$user->profile_picture}}" height="120px" style="margin-top: 60px; margin-bottom: 60px;">
                    <br>
                    {{ $user->name }}
                    <div style="font-size: 14px;">
                        {{ $user->address }}<br>
                        <ul class="ulist">
                            <li class="list"><span>{{ $user->email }}</span></li>
                            <li class="list"><span>{{ $user->mobile_number }}</span></li>
                        </ul>
                    </div>
                    <br>
                    <div style="font-size: 15px;">
                        Last Activities <br>
                        <ul class="ulist" style="text-align: left;">
                            <li class="list">Create a new Thread "Welcome to Bali Land" on <b>Tour and Trip Group</b></li>
                            <li class="list">Comment on thread "Wow" on <b>Uncategorized Thread</b></li>
                            <li class="list">Create a new Thread "Welcome to Bali Land" on <b>Tour and Trip Group</b></li>
                            <li class="list">Comment on thread "Wow" on <b>Uncategorized Thread</b></li>
                            <li class="list">Create a new Thread "Welcome to Bali Land" on <b>Tour and Trip Group</b></li>
                            <li class="list">Comment on thread "Wow" on <b>Uncategorized Thread</b></li>
                        </ul>
                        </div>
                    </div>
                </center>
            </div>

            <div id="organizationTitle"> {{$user->organization_name}}
                <div class="feature-expl">
                </div>
            </div>

            <div id="organizationImage">
                <center><img src="{{$user->organization_structure}}" alt="Struktur Organisasi"></center>
            </div>

            <div id="organizationProfile">
                {{$user->description}}
                <ul class="ulist" style="text-align: left;">
                    <li class="list">{{ $user->owner }}</li>
                    <li class="list">{{ $user->website }}</li>
                </ul>
            </div>
        </div>

        <div style="float: clear; margin-left: 30px; margin-right: 25px;" >
            <textarea name="timeline-post" placeholder="Apa yang baru?" wrap="hard"></textarea><br>
            <div style="float: right; margin-right: 220px;">
                <img src="/assets/photo.png" width="20px">
                <button class="button2">Post</button>
            </div>
        </div>
        <br><br>

        <div style="float: clear;" class="timeline">
            <div class="time">1 April 2017 pukul 13:00</div>
            Lorem ipsum dolor sit amet, consectur adipiscing elit.
            <hr>
            <div class="time">30 Maret 2017 pukul 10:00</div>
            Lorem ipsum dolor sit amet, consectur adipiscing elit.
            <div id="timelineImage">
                GAMBAR
            </div>
            <hr>
            <div class="time">21 Maret 2017 pukul 21:00</div>
            <div id="timelineImage">
                GAMBAR
            </div>
            <hr>
            <div class="time">1 Maret 2017 pukul 13:12</div>
            Lorem ipsum dolor sit amet, consectur adipiscing elit.
            <hr>
        </div>
    </section>

@endsection
