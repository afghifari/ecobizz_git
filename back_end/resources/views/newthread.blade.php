@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/newthread.css')}}" type="text/css">

	<section class="newthread-section1">
		<div id="newthread">
			Forum 1
		</div>
	</section>

	<section class="newthread-section2">
		Judul<br>
		<input type="text" name="judul">
		<br><br>
		Isi<br>
		<input type="textarea" name="isi">
		<br><br>
		<div style="float: right; margin-right: 250px;"><button class="button1">Buat Topik</button></div>

	</section>

@endsection
