@extends('layouts.app')

@section('content')

    <section class="section1">
        <div id="profile">
            Profile
            <div style="float:right;" align="right">
                <button class="button1">
                    EDIT
                </button>
            </div>
        </div>
        <!-- <div align="right">
            <button class="button1">
                EDIT
            </button>
        </div> -->
    </section>

    <section class="section2">
        <div class="container2">
            <div id="activities">
                <center>
                    <img src="/assets/circle.png" height="120px" style="margin-top: 60px; margin-bottom: 60px;">
                    <br>
                    {{ Auth::user()->name }}
                    <div style="font-size: 14px;">
                        {{ Auth::user()->address }}<br>
                        <ul class="ulist">
                            <li class="list"><span>{{ Auth::user()->email }}</span></li>
                            <li class="list"><span>{{ Auth::user()->mobile_number }}</span></li>
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

            <div id="organizationTitle"> Bisnis Percetakan Printer
                <div class="feature-expl">
                </div>              
            </div>

            <div id="organizationImage">
                GAMBAR
            </div>

            <div id="organizationProfile">
                Lorem ipsum dolor sit amet, consectur adipiscing elit. Morbi eget dolor et nisi faubicus rutrum vel nec erat. Vivamus imperdiet ligula et finibus ornare. Nam interdum mauris non pharetra consectur. Vestibulum sit amet facilisis risus. Ut sem libero, condimentum at auctor non, lobortis sit amet turpis. Ut gravida ac arcu feugiat. <br><br>
                <ul class="ulist" style="text-align: left;">
                    <li class="list">{{ Auth::user()->owner }}</li>
                    <li class="list">{{ Auth::user()->website }}</li>
                    <li class="list">08111</li>
                </ul>
            </div>
        </div>
    </section>

@endsection
