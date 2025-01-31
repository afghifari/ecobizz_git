@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/forum.css')}}" type="text/css">

	</div>
	<section class="forum-section1">
		<div id="forum">
			{{$forum->name}}
		</div>
	</section>

	<style type="text/css">
		.forum{
			margin-bottom: 32px;
		}
		.forum .f-header{
			padding: 12px;
			/*background: rgba(0, 0, 0, .2);*/
			border: solid 1px rgba(0, 0, 0, .1);
			margin-top: -1px;
			margin-bottom: 8px;
			border-radius: 3px;
			
		}
		.forum .f-header:hover{
			border: solid 1px #00AA44;
		}
		.forum .f-header .x-header a{
			font-size: 1.2em;
			color: #00AA44 !important;

		}
		.forum .f-header .x-description{
			color: #555;
		}
		.forum .f-header .x-last-seen{
			color: #777;
		}
		.forum .head-md{
			background: #00AA44;
			color: white;
			font-weight: bold;
			border-radius: 3px;
		}
		.search-section{
			margin-top: 30px;
		}
		.new-button{
			margin: 6px;
			padding: 6px;
			border: solid 1px rgba(0, 0, 0, .2);
			color: white;
			border-radius: 4px;
			background: #00AA44;
		}
		.new-button:hover{
			border: solid 1px rgba(0, 0, 0, .2);
		}
	</style>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 search-section" style="padding: 0">
			<div class="row">
				<div class="col-xs-8">
					<!-- <input type="text" name="search" placeholder="Search"> <input type="submit" name="submit" value=""> -->
				</div>
				<div class="col-xs-4" style="text-align: right;">
					@if (Auth::user())
						<a href={{url('create-forum/'. $forum->id)}}><button class="btn btn-success">Topik Baru</button></a><br><br><br>
					@endif
				</div>
			</div>
		</div>
	</div>
	<div class="row forum">
		<div class="col-xs-10 col-xs-offset-1">
			<div class="row f-header head-md">
				<div class="col-xs-12">
					Topik
				</div>
			</div>
			@if(sizeof($threads) == 0)
			<div class="row f-header">
				<div class="col-xs-12">
					No Topic
				</div>
			</div>
			@endif
			@foreach ($threads as $thread)
			<div class="row f-header">
				<div class="col-xs-9">
					<div class="x-header">
						<a href="{{url("thread/".$thread->id)}}" style="color: unset">{{$thread->name}}</a>
					</div>
					<div class="x-description">
						{{$thread->user->name}}
					</div>
					<div class="x-last-seen">
						{{ (new Carbon\Carbon($thread->updated_at))->diffForHumans() }}
					</div>
				</div>
				<div class="col-xs-3">
					{{count($thread->posts)}} Postingan
				</div>
			</div>
			@endforeach
		</div>
	</div>

@endsection
