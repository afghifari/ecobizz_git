@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/newthread.css')}}" type="text/css">

	<section class="newthread-section1">
		<div id="newthread">
			{{$forum->name}}
		</div>
	</section>

	<section class="newthread-section2">
		<div class="container">
			{!! Form::open(['method' => 'post', 'url' => url('forum/'.$forum->id)]) !!}
			<div class="row">
				<div class="col-xs-12">Judul</div>
			</div>
			<div class="row">
				<div class="col-xs-12"><input type="text" name="judul"></div>
			</div>
			<div class="row">
				<br>
				<div class="col-xs-12">Isi</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<input type="textarea" name="isi" wrap="hard" style="vertical-align: top;">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-10">
					<button class="button1 pull-right">Buat Topik</button>
				</div>
			</div>
		</div>
	</section>

@endsection
