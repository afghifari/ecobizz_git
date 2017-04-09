@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/thread.css')}}" type="text/css">

	<section class="thread-section1">
		<div id="thread">
			< JUDUL TOPIK >
		</div>
	</section>

	<section class="thread-section2">
		<div id="timestamp">
			1 April 2017 pukul 13:00
		</div>
		<div id="sender">
			<!-- profile picture --><img src="../assets/circle.png" height="35px"> Koperasi Kerupuk Asri
		</div>
		<div id="content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<!-- ditampilkan jika sudah login -->
		<img src="../assets/comment.png" width="20px" style="margin-top: 5px; margin-right: 20px; float: right;">
		<!-- ditampilkan jika belum login -->
		<div style="color: #000000; margin-bottom: 40px;">Anda harus <a href="login" class="link">login</a> untuk membalas.</div>

		<div id="timestamp">
			2 April 2017 pukul 08:00 membalas <a href="" style="color: #FFFFFF;">< nama sender ></a>
		</div>
		<div id="sender">
			<!-- profile picture --><img src="../assets/circle.png" height="35px"> Koperasi Tirta Bangun karya
		</div>
		<div id="content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>
		<!-- ditampilkan jika sudah login -->
		<img src="../assets/comment.png" width="20px" style="margin-top: 5px; margin-right: 20px; float: right;">
		<img src="../assets/like.png" width="20px;" style="margin-top: 5px; margin-right: 20px; float: right;">
		<!-- ditampilkan jika belum login -->
		<div style="color: #000000;">Anda harus <a href="login" class="link">login</a> untuk membalas.</div>
		
	</section>

@endsection
