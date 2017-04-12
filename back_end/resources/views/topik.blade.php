@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/forum.css')}}" type="text/css">

	<section class="forum-section1">
		<div id="forum">
			{{$forum->name}}
		</div>
	</section>

	<section class="forum-section2">
		<center><input type="text" name="search" placeholder="Search"> <input type="submit" name="submit" value=""></center>
		<table>
			<col width="150">
			<col width="100">
			<col width="50">
			<col width="100">
			<tr>
				<th>Topik</th>
				<th>Dimulai Oleh</th>
				<th>Postingan</th>
				<th>Postingan Akhir</th>
			</tr>
			@foreach ($threads as $thread)
			<tr>
				<td align="justify">
					<b><a class='h4' href="{{url("thread/".$thread->id)}}">{{$thread->name}}</a></b> <br>
				</td>
				<td align="left" style="font-size: 14px">{{$thread->user->name}}</td>
				<td>{{count($thread->posts)}}</td>
				<td>{{ (new Carbon\Carbon($thread->last_update))->diffForHumans() }}</td>
			</tr>
			@endforeach
		</table>

	</section>

@endsection
