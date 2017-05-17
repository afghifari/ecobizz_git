@extends('layouts.app')

@section('content')
    </div>
    <section class="section1">
        <div class="row">
            <div class="col-xs-3">
                <div id="group">
                    Nama Grup
                </div>
            </div>
            <div class="col-xs-8" style="margin-top: 150px;">
                <br><br>
                <button class="btn btn-success pull-right">Gabung</button>
            </div>
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
        }
        .group-section {
            margin-bottom: 60px;
        }
        .btn-default {
            width: 100%;
            background-color: #DCDCDC;
            margin-bottom: 7px;
        }
        #timestamp {
            color: #FFFFFF;
            font-size: 14px;
            background-color: #00aa44;
            text-align: left;
            vertical-align: middle;
            padding: 7px; 
            border-left: 1px solid #DCDCDC;
            border-right: 1px solid #DCDCDC;
            border-top: 1px solid #DCDCDC;
        }

        #sender {
            font-size: 15px;
            color: #000000;
            background-color: rgba(220, 220, 220, 0.3);
            text-align: left;
            vertical-align: middle;
            padding: 10px; 
            border-left: 1px solid #DCDCDC;
            border-right: 1px solid #DCDCDC;
        }

        #content {
            font-size: 16px;
            color: #000000;
            background-color: #FFFFFF;
            text-align: left;
            vertical-align: middle;
            padding: 20px; 
            border-left: 1px solid #DCDCDC;
            border-right: 1px solid #DCDCDC;
            border-bottom: 1px solid #DCDCDC;
        }
    </style>

    <div class="group-section">
        <div class="row rowx">
            <div class="col-md-10" style="margin-top: 2px;">
                <div class="the-post input-post row" style="padding: 0">
                    <div class="col-md-12" style="padding: 0">
                        <form>
                            <div class="row" style="padding: 0">
                                <div class="col-md-12 post-entity" style="padding: 0">
                                    <!-- <input type="file" name="media" id="media" class="button3" accept="image/*">
                                    <label for="media"  style="margin-bottom: 12px;"><img src="/assets/photo.png" width="20px"></label> -->
                                    <button class="button-post">Post</button>
                                </div>
                            </div>
                            <textarea name="post" placeholder="Tuliskan sesuatu..."></textarea>
                            <br><br>
                        </form>
                    </div>
                </div>

                <!-- <div class="the-post row">
                    <div class="col-md-12" style="padding: 0">
                        <div class="row">
                            <div class="col-md-1" style="padding: 0">
                                <img src="/assets/circle.png" class="image-post">
                            </div>
                            <div class="col-md-11" style="padding: 0; margin-top: 5px;">
                                <div style="font-weight: bold;">
                                    Albert Einstein
                                </div>
                                <div class="tanggal-post">
                                    7 Mei 2017 @ 16.02 WIB
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 0">
                            <div class="col-md-12 text-post" style="padding: 0">
                                Message
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-xs-12">
                        <div id="timestamp">
                            1 Mei 2017 @ 21.04 WIB
                        </div>
                        <div id="sender">
                            <!-- profile picture --><img src="/assets/circle.png" height="35px"> Albert Einstein
                        </div>
                        <div id="content">
                            Test
                        </div>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div id="timestamp">
                            1 Mei 2017 @ 21.04 WIB
                        </div>
                        <div id="sender">
                            <!-- profile picture --><img src="/assets/circle.png" height="35px"> Albert Einstein
                        </div>
                        <div id="content">
                            Test
                        </div>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div id="timestamp">
                            1 Mei 2017 @ 21.04 WIB
                        </div>
                        <div id="sender">
                            <!-- profile picture --><img src="/assets/circle.png" height="35px"> Albert Einstein
                        </div>
                        <div id="content">
                            Test
                        </div>
                        <br>
                    </div>
                </div>
                
            </div>
            <div class="col-md-2 left-section">
                <div class="row">
                    <br><br>
                </div>
                <div class="row" style="font-size: 17px;">
                    <button class="btn btn-default" onclick="window.location.href='/group'">Diskusi</button>
                </div>
                <div class="row" style="font-size: 17px;">
                    <button class="btn btn-default">Anggota (100)</button>
                </div>
                
            </div>
        </div>
    </div>
@endsection
