@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/forum.css')}}" type="text/css">

	</div>
	<section class="forum-section1">
		<div id="forum">
			Pencarian
		</div>
	</section>

	<style type="text/css">
		.forum{
			margin-bottom: 32px;
		}
		.forum .f-header{
			margin-bottom: 16px;
			padding: 12px;
			/*background: rgba(0, 0, 0, .2);*/
			border: solid 1px rgba(0, 0, 0, .1);
			margin-top: -1px;
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
		}
		.search-section{
			margin-top: 30px;
			margin-bottom: 30px;
		}
		.search-section .special-text{
			font-weight: bold;
		}
		.div-profile-picture-result{
			text-align: right !important;
			padding-right: 0 !important;
		}
		.profile-picture-result{
			width: 40px;
			height: 40px;
			border-radius: 50%;
		}
		.search-result-item{

		}
		.search-result-item div{

		}
		.search-result-item div .nama{
			color: black;
		}
		.search-result-item div .organization{
			color: #555;
		}

		@media (max-width: 500px) {
			.search-result-item div .nama{
				margin-left: 30px;
			}
			.search-result-item div .organization{
				margin-left: 30px;
			}
		}
		.view-profile{
			text-align: center;
			background: rgba(0, 0, 0, .1);
			padding: 5px 0;
			margin-bottom: 5px;
			transition: .1s;
			border-radius: 8px;
		}
		.view-profile:hover{
			background: #00AA44;
			color: white;
			cursor: pointer;
		}
		.btn-success{
			border-radius: 5px;
		}
		input[type=date], input[type=number] {
			border-radius: 5px;
			border: 1px solid #ccc;
			padding: 3px;
		}
	</style>

	@if(sizeof($result) == 0)
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 search-section" style="padding: 0">
			Tidak ada hasil untuk: <span class="special-text">{{ $query }}</span> ({{ $type }})
		</div>
	</div>
	@else
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 search-section" style="padding: 0">
			Hasil pencarian untuk: <span class="special-text">{{ $query }}</span> ({{ $type }})
		</div>
	</div>
	<div class="row forum">
		<div class="col-xs-10 col-xs-offset-1">
			<!-- <div class="row f-header">
				<div class="col-xs-12">
					No Forum
				</div>
			</div> -->
			@if($type == "user")
				<form class="form-inline" action="#" method="GET">
					<div class="row">
						<div class="col-md-3 col-md-offset-1">
						<?php
							$roles = App\Role::pluck('name', 'id');
							$roles[0] = "Semua"
						?>
							<b>Kategori: </b>{!! Form::select('kategori', $roles, request()->kategori ? request()->kategori : 0, ['class' => 'form-control input-sm'] ) !!}
						</div>
						<div class="col-md-3 col-md-offset-1">
							<b>Lokasi:</b>
							<input type="text" name="lokasi" placeholder="Kota/Kabupaten" style="width: 150px; padding-top: 0; padding-bottom: 0;" value="{{request()->lokasi ? request()->lokasi : ""}}">
							<br><br>
						</div>
						<input type="hidden" name="type" value="{{request()->type}}">
						<input type="hidden" name="q" value="{{request()->q}}">
						<div class="col-md-3 col-md-offset-1">
							<button type="submit" class="btn btn-success">Cari</button>
						</div>
					</div>
				</form>
				<br>
				@foreach($result as $data)
				<div class="row f-header">
					<div class="col-md-10">
						<div class="row search-result-item">
							<div class="col-xs-1 div-profile-picture-result">
								<img src="{{ $data->profile_picture }}" class="profile-picture-result">
							</div>
							<div class="col-xs-10">
								<div class="nama">
									{{ $data->name }}
								</div>
								<div class="organization">
									{{ $data->organization_name }}
									<br><br>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="row view-profile" onclick="window.location.href = '/user/' + {{ $data->id }};">
							Lihat Profil
						</div>
						@if ($data->id != Auth::user()->id && App\FriendList::where('own_id', Auth::user()->id)->where('friend_id', $data->id)->first() == null)
						<div class="row view-profile" onclick="window.location.href = '/add_friend/' + {{ $data->id }};">
							Tambahkan Teman
						</div>
						@endif
					</div>
				</div>
				@endforeach
			@endif

			@if($type == "topik")
				<form class="form-inline">
					<div class="row">
						<?php
							$forums = App\Forum::pluck('name', 'id');
							$forums[0] = "Semua";
						?>
						<div class="col-md-3 col-md-offset-1">
							<b>Forum: </b>{!! Form::select('forum', $forums, request()->forum ? request()->forum : 0, ['class' => 'form-control input-sm'] ) !!}
						</div>
						<div class="col-md-3">
							<b>Tanggal dibuat:</b><br>
							Tanggal awal: <br><input type="date" name="start" style="width: 70%;" value="{{request()->start ? request()->start : null}}"><br><br>
							Tanggal akhir: <br><input type="date" name="end" style="width: 70%" value="{{request()->end ? request()->end : null}}"><br><br><br>
						</div>
						<div class="col-md-3">
							<b>Jumlah Postingan:</b><br>
							Minimal: <br><input type="number" name="min" style="width: 50%;" value="{{request()->min ? request()->min : 1}}"><br><br>
							Maksimal: <br><input type="number" name="max" style="width: 50%" value="{{request()->max ? request()->max : null}}"><br><br><br>
						</div>
						<input type="hidden" name="type" value="{{request()->type}}">
						<input type="hidden" name="q" value="{{request()->q}}">
						<div class="col-md-2">
							<button type="submit" class="btn btn-success">Cari</button>
						</div>
					</div>
				</form>
				<br>
				@foreach($result as $data)
				<div class="row f-header">
					<div class="col-md-10">
						<div class="row search-result-item">
							<div class="col-xs-12">
								<div class="nama">
									{{ $data->name }}
								</div>
								<div class="organization">
									<i>Dibuat oleh</i> {{ $data->thread_maker }}
									<br><br>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 view-profile" onclick="window.location.href = '/thread/' + {{ $data->id }};">
						Lihat Topik
					</div>
				</div>
				@endforeach
			@endif

			@if($type == "grup")
				<div class="row f-header">
					<div class="col-md-10">
						<div class="row search-result-item">
							<div class="col-xs-12">
								<div class="nama">
									Group 1
								</div>
								<div class="organization">
									<i>Dibuat oleh</i> Test
									<br><br>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 view-profile" onclick="window.location.href = '/thread/' + {{ $data->id }};">
						Lihat Grup
					</div>
				</div>
			@endif
		</div>
	</div>
	@endif


@endsection
