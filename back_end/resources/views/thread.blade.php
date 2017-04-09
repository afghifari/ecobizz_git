@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/thread.css')}}" type="text/css">

	<section class="thread-section1">
		<div id="thread">
			< JUDUL TOPIK >
		</div>
	</section>

	<section class="thread-section2">
		@foreach ($posts as $post)
		<div id="timestamp">
			{{$post->created_at}}
		</div>
		<div id="sender">
			<!-- profile picture --><img src="{{$post->owner->profile_picture}}" height="35px"> {{$post->owner->name}}
		</div>
		<div id="content">
			{{$post->content}}
		</div>
			@if (Auth::user())
			<!-- ditampilkan jika sudah login -->
				<img src="../assets/comment.png" width="20px" style="margin-top: 5px; margin-right: 20px; float: right;">
			@else
			<!-- ditampilkan jika belum login -->
				<div style="color: #000000; margin-bottom: 40px;">Anda harus <a href="{{url('login')}}" class="link">login</a> untuk membalas.</div>
			@endif
		@endforeach


	</section>

@endsection
