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
		}
		.view-profile:hover{
			background: #00AA44;
			color: white;
			cursor: pointer;
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
							<b>Kategori: </b>{!! Form::select('kategori', App\Role::pluck('name', 'id'), null, ['class' => 'form-control input-sm'] ) !!}
						</div>
						<div class="col-md-3 col-md-offset-1">
							<b>Lokasi:</b>
							<input type="text" name="kota" placeholder="Kota/Kabupaten" style="width: 150px; padding-top: 0; padding-bottom: 0;">
							<br><br>
						</div>
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
						<div class="row view-profile">
							Tambahkan Teman
						</div>
					</div>
				</div>
				@endforeach
			@endif

			@if($type == "topik")
				<form class="form-inline">
					<div class="row">
						<div class="col-md-3 col-md-offset-1">
							<!-- <div class="dropdown">
								<b>Kategori:</b>
								<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Forum
								<span class="caret"></span></button>
								<ul class="dropdown-menu">
									<li><a href="#">Forum 1</a></li>
									<li><a href="#">Forum 2</a></li>
									<li><a href="#">Forum 3</a></li>
								</ul>
								<br><br>
							</div> -->
							<b>Forum: </b>{!! Form::select('forum', App\Forum::pluck('name', 'id'), null, ['class' => 'form-control input-sm'] ) !!}
						</div>
						<div class="col-md-3">
							<b>Tanggal dibuat:</b><br>
							Tanggal awal: <br><input type="date" name="start" style="width: 70%;"><br><br>
							Tanggal akhir: <br><input type="date" name="end" style="width: 70%"><br><br><br>
						</div>
						<div class="col-md-3">
							<b>Jumlah Postingan:</b><br>
							Minimal: <br><input type="number" name="min" value=1 style="width: 50%;"><br><br>
							Maksimal: <br><input type="number" name="max" style="width: 50%"><br><br><br>
						</div>
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
		</div>
	</div>
	@endif


@endsection
