@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/grouplist.css')}}" type="text/css">

	</div>

	<div class="row">
		<div class="col-md-12">
			<section class="group-section1">
				<div id="group">
					Grup
				</div>
			</section>
		</div>
	</div>

	<br>

	<div class="row">
		<div class="col-md-1 col-md-offset-10">
			<button class="btn btn-success" onclick="window.location.href='/newgroup'">Grup Baru</button>
		</div>
		<br><br><br>
	</div>

	<div class="row group">
		<div class="col-md-10 col-md-offset-1">
			
			<!-- JIKA TIDAK ADA GRUP -->
			<!-- <div class="row f-header">
				<div class="col-md-12">
					Tidak ada grup masuk
				</div>
			</div> -->

			<div class="row f-header">
				<div class="col-md-10">
					<div class="x-header">
						<a href="#"><b>Nama Grup</b></a>
					</div>
					<div class="x-sender">
						<!-- Deskripsi Grup --> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce est erat, fermentum id odio quis, scelerisque ultricies erat.
					</div>
					<div class="x-date">
						100 anggota
					</div>
					<br>
				</div>

				<div class="col-md-1"  style="margin-left: 20px;">
					<div class="row view-profile" onclick="window.location.href='/group'">
						Lihat Grup
					</div>
				</div>
			</div>

			<div class="row f-header">
				<div class="col-md-10">
					<div class="x-header">
						<a href="#"><b>Nama Grup</b></a>
					</div>
					<div class="x-sender">
						<!-- Deskripsi Grup --> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce est erat, fermentum id odio quis, scelerisque ultricies erat.
					</div>
					<div class="x-date">
						100 anggota
					</div>
					<br>
				</div>

				<div class="col-md-1"  style="margin-left: 20px;">
					<div class="row view-profile" onclick="window.location.href='/group'">
						Lihat Grup
					</div>
				</div>
			</div>

			<div class="row f-header">
				<div class="col-md-10">
					<div class="x-header">
						<a href="#"><b>Nama Grup</b></a>
					</div>
					<div class="x-sender">
						<!-- Deskripsi Grup --> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce est erat, fermentum id odio quis, scelerisque ultricies erat.
					</div>
					<div class="x-date">
						100 anggota
					</div>
					<br>
				</div>

				<div class="col-md-1"  style="margin-left: 20px;">
					<div class="row view-profile" onclick="window.location.href='/group'">
						Lihat Grup
					</div>
				</div>
			</div>

			<div class="row f-header">
				<div class="col-md-10">
					<div class="x-header">
						<a href="#"><b>Nama Grup</b></a>
					</div>
					<div class="x-sender">
						<!-- Deskripsi Grup --> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce est erat, fermentum id odio quis, scelerisque ultricies erat.
					</div>
					<div class="x-date">
						100 anggota
					</div>
					<br>
				</div>
				<div class="col-md-1"  style="margin-left: 20px;">
					<div class="row view-profile" onclick="window.location.href='/group'">
						Lihat Grup
					</div>
				</div>
			</div>
			
		</div>
	</div>


@endsection
