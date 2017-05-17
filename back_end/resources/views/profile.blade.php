@extends('layouts.app')

@section('content')

    </div>
    <link rel="stylesheet" href="{{asset('css/profile.css')}}" type="text/css">
    <section class="section1">
        <div id="profile">
            Profil 
            <!-- Kalo online --> <img src="/assets/online.png" title="Online" class="status">
            <!-- Kalo offline --> <!-- <img src="/assets/offline.png" title="Offline" class="status"> -->
            
            <!-- Kalo diri sendiri yang liat -->
            @if (Auth::user())
                @if (Auth::user()->id == $user->id)
                    <div style="float:right;" align="right">
                        <a href={{url('user/'.$user->id . "/edit")}}>
                        <button class="button1">
                            EDIT
                        </button>
                        </a>
                    </div>
                @endif
            @endif

            <!-- Kalo orang lain yang liat -->
            {{-- @if (Auth::user()) --}}
                {{-- @if (Auth::user()->id == $user->id) --}}
                    <!-- <div style="float:right;" align="right">
                        <a href="#">
                        <button class="button1">
                            Tambahkan Teman
                        </button>
                        </a>
                    </div> -->
                {{-- @endif --}}
            {{-- @endif --}}
        </div>
    </section>


        <style type="text/css">
            .left-section{
                text-align: center;
            }
            .row{
                padding: 0;
                margin: 0;
            }
            .rowx{
                padding: 0 15px;
                margin-top: 32px;
            }
            textarea{
                width: 100% !important;
                margin: 0 !important;
                padding: 12px;
            }
            .post-entity{
                text-align: right;
                 height: unset !important;
            }
            .the-post{
                border: solid 1px #DCDCDC;
                margin-bottom: 12px;
                padding: 12px;
                padding-bottom: 0;
                background: rgba(220, 220, 220, 0.4);
                border-radius: 3px;
            }
            .image-post{
                width: 48px;
                height: 48px;
                border-radius: 4px;
            }
            .tanggal-post{
                color: #777;
            }
            .text-post{
                background: #FFF;
                margin-left: -12px;
                margin-top: -12px;
                margin-right: -12px;
                margin-top: 12px;
                width: calc(100% + 24px);
                padding: 12px !important;
                color: #888;
            }
            .button-post{
                border: solid 1px rgba(0, 0, 0, .1);
                padding: 4px 8px;
                border-radius: 0;
                background: #396FB9;
                color: white;
                margin-top: 8px;
            }
            .input-post{
                background: unset;
                border: none;
            }
            .title-post-section{
                border: none;
                background: unset;
            }
            .top-buffer{
                margin-top: 60px;
            }
            .btn-danger {
                font-size: 12px;
                border-radius: 3px;
            }
        </style>
        <div class="row rowx">
            <div class="col-md-4 left-section">
                <div>
                    <img src="{{$user->profile_picture}}" height="120px" style="margin-top: 60px; margin-bottom: 60px;">
                </div>
                <div>
                    {{ $user->name }}
                </div>
                <div style="font-size: 14px;">
                    <div>
                        {{ $user->address }}
                    </div>
                    <div>
                        {{ $user->email }}
                    </div>
                    <div>
                        {{ $user->mobile_number }}
                    </div>
                </div>
                <br>
                <div style="font-size: 15px;">
                    <div>
                        Media Sosial
                    </div>
                    <div style="line-height: 30px;">
                        <img src="/assets/whatsapp.png" width="20"> {{$user->whatsapp_number}}<br>
                        <img src="/assets/fb.png" width="20"> <a href="https://www.facebook.com/search/top/?q={{$user->facebook_id}}" class="socialmedia" target="_blank"> {{$user->facebook_id}} </a> <br>
                        <img src="/assets/twitter.png" width="20"> <a href="https://www.twitter.com/{{$user->twitter_id}}" class="socialmedia" target="_blank">  {{$user->twitter_id}} </a> <br>
                    </div>
                </div>
                <div class="row top-buffer">
                    <button class="btn btn-danger" style="margin-bottom: 100px;">Verifikasi Akun</button>
                </div>
            </div>
            <div class="col-md-8" style="margin-top: 2px;">

                <div class="the-post row" style="background: unset; border: none; padding: 0;">
                    <div class="col-md-12" style="padding: 0">
                        <div id="organizationTitle" style="width: 100%;">
                            {{$user->organization_name}}
                        </div>

                        <div id="organizationImage" style="width: 100%;">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img src="{{$user->organization_structure}}" alt="Struktur Organisasi" class="embed-responsive-item">
                            </div>
                        </div>

                        <style type="text/css">
                            .key{
                                font-size: 1em;
                                color: #222;
                            }
                            .value{
                                font-size: 1.2em;
                                color: #555;
                                margin-bottom: 8px;
                            }
                        </style>
                        <div id="organizationProfile" style="width: 100%;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="key">
                                        <i class="fa fa-user"></i> Nama Organisasi
                                    </div>
                                    <div class="value">
                                        {{ $user->organization_name }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="key">
                                        <i class="fa fa-book"></i> Deskripsi
                                    </div>
                                    <div class="value">
                                        {{$user->description}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="key">
                                        <i class="fa fa-diamond"></i> Peran
                                    </div>
                                    <div class="value">
                                        {{ $user->role ? $user->role->name : null}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="key">
                                        <i class="fa fa-globe"></i> Website
                                    </div>
                                    <div class="value">
                                        {{ $user->website }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="key">
                                        <i class="fa fa-rss"></i> Kebutuhan
                                    </div>
                                    <div class="value">
                                        {{ $user->needs }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="key">
                                        <i class="fa fa-asterisk"></i> Produk
                                    </div>
                                    <div class="value">
                                        {{ $user->products }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="border: solid 1px rgba(0, 0, 0, .1); margin: 0; margin-top: 32px; width: 100%; max-width: unset;" />
                <div class="the-post row title-post-section">
                    <div class="col-md-12" style="padding: 0">
                        TIMELINE
                    </div>
                </div>

                @if (Auth::user())
                <div class="the-post input-post row" style="padding: 0">
                    <div class="col-md-12" style="padding: 0">

                        @if (Auth::user()->id == $user->id)
                        {!! Form::open(['method' => 'post', 'url' => url('user/'. $user->id . '/timeline')]) !!}
                        {!! Form::textarea("timeline_post", null, ['placeholder' => 'Apa yang baru?', 'size' => '20x5']) !!}
                        <div class="row" style="padding: 0">
                            <div class="col-md-12 post-entity" style="padding: 0">
                                <input type="file" name="media" id="media" class="button3" accept="image/*">
                                <label for="media"  style="margin-bottom: 12px;"><img src="/assets/photo.png" width="20px"></label>
                                <button class="button-post">Post</button>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                @endif
                @for($i = sizeof($posts) - 1; $i > -1; $i--)
                <div class="the-post row">
                    <div class="col-md-12" style="padding: 0">
                        <div class="row">
                            <div class="col-md-1" style="padding: 0">
                                <img src="{{$user->profile_picture}}" class="image-post">
                            </div>
                            <div class="col-md-11" style="padding: 0; margin-top: 5px;">
                                <div style="font-weight: bold;">
                                    {{ $user->name }}
                                </div>
                                <div class="tanggal-post">
                                    {{$posts[$i]->created_at}}
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 0">
                            <div class="col-md-12 text-post" style="padding: 0">
                                {{$posts[$i]->message}}
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
@endsection
