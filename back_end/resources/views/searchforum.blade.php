@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/forum.css')}}" type="text/css">

	</div>
	<section class="forum-section1">
		<div id="forum">
			Hasil Pencarian '...'
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
			margin-left: 20px;
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
			margin-left: 20px;
		}
		.forum .f-filterheader{
			padding: 12px;
			/*background: rgba(0, 0, 0, .2);*/
			border: solid 1px rgba(0, 0, 0, .1);
			margin-top: -1px;
		}
		.forum .head-filter{
			background: #00AA44;
			color: white;
			font-weight: bold;
		}
		.forum .filter {
			padding: 12px;
			/*background: rgba(0, 0, 0, .2);*/
			border: solid 1px rgba(0, 0, 0, .1);
			margin-top: -1px;
			padding-left: 30px;
		}
		.search-section{
			margin-top: 30px;
		}
		.link-forum {
			color: #00AA44;
		}
		.btn-success {
			background-color: #00AA44;
			margin-top: 5px;
			width: 100%;
		}
		.btn-success:hover {
			background-color: #000000;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
		}
	</style>

	<div class="row">
		<div class="col-md-10 col-md-offset-1 search-section" style="padding: 0">
			<center><input type="text" name="search" placeholder="Cari topik..."> <input type="submit" name="submit" value=""></center>
		</div>
	</div>
	<br>

	<div class="container">
		<div class="row forum"> 
			<div class="col-md-2">
				<div class="row f-filterheader head-filter">
					Forum
				</div>
				<div class="row filter">
					<div class="checkbox">
						<label><input type="checkbox">Forum 1</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox">Forum 2</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox">Forum 3</label>
					</div>
				</div>
				<div class="row f-filterheader head-filter">
					Tanggal
				</div>
				<div class="row filter">
					Tanggal awal: <br><input type="date" name="start" style="width: 95%;"><br><br>
					Tanggal akhir: <br><input type="date" name="end" style="width: 95%"><br>
				</div>
				<div class="row f-filterheader head-filter">
					Jumlah Postingan
				</div>
				<div class="row filter">
					Minimal: <br><input type="number" name="min" value=1 style="width: 50%;"><br><br>
					Maksimal: <br><input type="number" name="max" style="width: 50%"><br>
				</div>
				<div class="row">
					<center><button type="button" class="btn btn-success">CARI</button></center>
				</div>
			</div>

			<div class="col-md-8">
				<div class="row f-header head-md">
					<div class="col-md-8">
						Topik
					</div>
					<div class="col-md-4">
						Jumlah Postingan
					</div>
				</div>
				
				<div class="row f-header">
					<div class="col-md-8">
						<div class="x-header">
							<a href="#">Topik 1</a>
						</div>
						<div class="x-last-seen">
							Jumat, 21 April 2017
						</div>
					</div>
					<div class="col-md-4">
						2 Postingan
					</div>
				</div>
				<div class="row f-header">
					<div class="col-md-8">
						<div class="x-header">
							<a href="#">Topik 2</a>
						</div>
						<div class="x-last-seen">
							Sabtu, 22 April 2017
						</div>
					</div>
					<div class="col-md-4">
						1 Postingan
					</div>
				</div>

			</div>
		</div>
	</div>


@endsection
