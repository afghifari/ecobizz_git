@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/newthread.css')}}" type="text/css">

	<section class="newthread-section1">
		<div id="newthread">
			{{$forum->name}}
		</div>
	</section>

	<section class="newthread-section2">
		{!! Form::open(['method' => 'post', 'url' => url('forum/'.$forum->id)]) !!}
		Judul<br>
		<input type="text" name="judul">
		<br><br>
		Isi<br>
		<input type="textarea" name="isi" wrap="hard" style="vertical-align: top;">
		<br><br>
		<div style="float: right; margin-right: 250px;"><button class="button1">Buat Topik</button></div>

	</section>

@endsection
