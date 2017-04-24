@extends('layouts.app')

@section('content')

    <section class="section1">
        <div id="profile">
            Profile
            @if (Auth::user()->id == $user->id)
                <div style="float:right;" align="right">
                    <a href={{url('user/'.$user->id . "/edit")}}>
                    <button class="button1">
                        EDIT
                    </button>
                    </a>
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
                <ul class="ulist" style="text-align: left;">
                    <li class="list">Deskripsi: <br>{{$user->description}}</li><br>
                    <li class="list">Owner: <br>{{ $user->owner }}</li><br>
                    <li class="list">Peran: <br>{{$user->role->name}}</li><br>
                    <li class="list">Website: <br>{{ $user->website }}</li><br>
                    <li class="list">Kebutuhan: <br>{{ $user->needs }}</li><br>
                </ul>
            </div>
        </div>

        <div style="float: clear; margin-left: 30px; margin-right: 25px;" >
            @if (Auth::user()->id == $user->id)
            {!! Form::open(['method' => 'post', 'url' => url('user/'. $user->id . '/timeline')]) !!}
            {!! Form::textarea("timeline_post", null, ['placeholder' => 'Apa yang baru?']) !!}
            <div style="float: right; margin-right: 220px;">
            	<input type="file" name="media" id="media" class="button3" accept="image/*">
            	<label for="media"><img src="/assets/photo.png" width="20px"></label>
                <button class="button2">Post</button>
            </div>
            @endif
        </div>
        <br><br>

        <div style="float: clear;" class="timeline">
            @foreach ($posts as $post)

            <div class="time">{{$post->created_at}}</div>
            {{$post->message}}
            <hr>

            @endforeach

        </div>
    </section>

@endsection
