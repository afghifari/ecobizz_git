@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/forum.css')}}" type="text/css">

	</div>
	<section class="forum-section1">
		<div id="forum">
			Forum
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
		}
		.search-section{
			margin-top: 30px;
		}
	</style>

	<div class="row">
		<div class="col-md-10 col-md-offset-1 search-section" style="padding: 0">
			<input type="text" name="search" placeholder="Search"> <input type="submit" name="submit" value="">
		</div>
	</div>
	<div class="row forum">
		<div class="col-md-10 col-md-offset-1">
			<div class="row f-header head-md">
				<div class="col-md-10">
					Forum
				</div>
				<div class="col-md-1">
					Topik
				</div>
				<div class="col-md-1">
					Postingan
				</div>
			</div>
			@foreach ($forums as $forum)
			<div class="row f-header">
				<div class="col-md-10">
					<div class="x-header">
						<a href="{{url("forum/".$forum->id)}}" style="color: unset">{{ $forum->name }}</a>
					</div>
					<div class="x-description">
						{{ $forum->description }}
					</div>
					<div class="x-last-seen">
						{{ (new Carbon\Carbon($forum->last_update))->diffForHumans() }}
					</div>
				</div>
				<div class="col-md-1">
					{{count($forum->threads)}}
				</div>
				<div class="col-md-1">
					{{ $forum->postCount() }}
				</div>
			</div>
			@endforeach
		</div>
	</div>


@endsection
