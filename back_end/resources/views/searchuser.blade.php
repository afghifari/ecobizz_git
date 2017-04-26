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
		.user{
			margin-bottom: 32px;
		}
		.user .f-header{
			padding: 12px;
			/*background: rgba(0, 0, 0, .2);*/
			border: solid 1px rgba(0, 0, 0, .1);
			margin-top: -1px;
			margin-left: 20px;
		}
		.name-link {
			font-size: 18px;
			font-weight: bold;
			color: #000000;
		}
		.name-link:hover {
			font-size: 18px;
			font-weight: bold;
			color: #000000;
		}
		.user .head-md{
			background: #00AA44;
			color: white;
			font-weight: bold;
			margin-left: 20px;
		}
		.user .f-filterheader{
			padding: 12px;
			/*background: rgba(0, 0, 0, .2);*/
			border: solid 1px rgba(0, 0, 0, .1);
			margin-top: -1px;
		}
		.user .head-filter{
			background: #00AA44;
			color: white;
			font-weight: bold;
		}
		.user .filter {
			padding: 12px;
			/*background: rgba(0, 0, 0, .2);*/
			border: solid 1px rgba(0, 0, 0, .1);
			margin-top: -1px;
			padding-left: 30px;
		}
		.search-section{
			margin-top: 30px;
		}
		.link {
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
			<center><input type="text" name="search" placeholder="Cari user..."> <input type="submit" name="submit" value=""></center>
		</div>
	</div>
	<br>

	<div class="container">
		<div class="row user"> 
			<div class="col-md-2">
				<div class="row f-filterheader head-filter">
					Peran
				</div>
				<div class="row filter">
					<div class="checkbox">
						<label><input type="checkbox">Dekopinda</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox">Dekopinwil</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox">Eksportir</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox">Investor</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox">ICT</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox">Konsultan</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox">Koperasi</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox">Perguruan Tinggi</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox">Industri</label>
					</div>
					<div class="checkbox">
						<label><input type="checkbox">Lainnya</label>
					</div>

				</div>
				<div class="row f-filterheader head-filter">
					Lokasi
				</div>
				<div class="row filter">
					<input type="text" name="kota" placeholder="Kota/Kabupaten" style="width: 150px;">
				</div>
				<div class="row">
					<center><button type="button" class="btn btn-success">CARI</button></center>
				</div>
			</div>

			<div class="col-md-7">
				<div class="row f-header">
					<div class="col-md-2">
						<!-- ke profile user --><a href=""><img src="/assets/circle.png" height="70px" id="profilepicture"></a>
					</div>
					<div class="col-md-7">
						<div class="row">
							<!-- ke profile user --><a href="" class="name-link">Nama</a>
						</div>
						<div class="row">
							Email
						</div>
						<div class="row">
							Nama organisasi
						</div>
					</div>
					<div class="col-md-3">
						<div class="row">
							<a href="" class="link"><div style="text-align: right;">Tambahkan Teman</div></a>
						</div>
						<div class="row">
							<a href="" class="link"><div style="text-align: right;">Kirim Pesan</div></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-7">
				<div class="row f-header">
					<div class="col-md-2">
						<!-- ke profile user --><a href=""><img src="/assets/circle.png" height="70px" id="profilepicture"></a>
					</div>
					<div class="col-md-7">
						<div class="row">
							<!-- ke profile user --><a href="" class="name-link">Nama</a>
						</div>
						<div class="row">
							Email
						</div>
						<div class="row">
							Nama organisasi
						</div>
					</div>
					<div class="col-md-3">
						<div class="row">
							<a href="" class="link"><div style="text-align: right;">Tambahkan Teman</div></a>
						</div>
						<div class="row">
							<a href="" class="link"><div style="text-align: right;">Kirim Pesan</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection
