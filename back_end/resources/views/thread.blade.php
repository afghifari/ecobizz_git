@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/thread.css')}}" type="text/css">

	<section class="thread-section1">
		<div id="thread">
			{{$thread->name}}
		</div>
	</section>

	<section class="thread-section2">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
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
					<br>
					@endforeach
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					@if (Auth::user())
					<!-- ditampilkan jika sudah login -->
						{!! Form::open(['method' => 'post', 'url' => url('thread/'.$thread->id)]) !!}
						<!-- {!! Form::textarea("comment", null, ['placeholder' => 'Tinggalkan Komentar']) !!} -->
						<textarea name="comment" placeholder="Tinggalkan komentar.." wrap="hard" class="comment"></textarea>
						<br>
						<div style="float: right; margin-right: 150px;">
							<button class="button2">Kirim</button>

						</div>
						{!! Form::close() !!}
					@else
					<!-- ditampilkan jika belum login -->
						<div style="color: #000000; margin-bottom: 40px;">Anda harus <a href="{{url('login')}}" class="link">login</a> untuk membalas.</div>
					@endif
				</div>
			</div>
		</div>


	</section>

@endsection
