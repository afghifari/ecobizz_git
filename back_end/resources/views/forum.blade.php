@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/forum.css')}}" type="text/css">

	<section class="forum-section1">
		<div id="forum">
			Forum
		</div>
	</section>

	<section class="forum-section2">
		<center><input type="text" name="search" placeholder="Search"> <input type="submit" name="submit" value=""></center>
		<table>
			<col width="200">
			<col width="50">
			<col width="50">
			<col width="100">
			<tr>
				<th>Forum</th>
				<th>Topik</th>
				<th>Postingan</th>
				<th>Postingan Akhir</th>
			</tr>
			@foreach ($forums as $forum)
				<tr>
					<td align="justify">
						<b><a class='h3' href="{{url("forum/".$forum->id)}}">{{ $forum->name }}</a></b> <br>
						{{ $forum->description }}
					</td>
					<td align="center"> {{count($forum->threads)}}</td>
					<td align="center">{{ $forum->postCount() }}</td>
					<td align="center">{{ (new Carbon\Carbon($forum->last_update))->diffForHumans() }}</td>
				</tr>
			@endforeach
		</table>

	</section>

@endsection
