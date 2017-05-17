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
		<center><button class="btn btn-success" onclick="window.location.href='/newgroup'">Grup Baru</button></center>
		<br><br><br>
	</div>

	<div class="row group">
		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-3 f-header">
				<div class="x-header">
					<a href="/group"><b>Grup Peternak Lele</b></a>
				</div>
				<div class="x-sender">
					<!-- Deskripsi Grup --> Peternak Daerah Subang yang fokus meningkatkan kualitas lele den berbagi strategi pemasaran yang baik
				</div>
				<div class="x-date">
					6 anggota
				</div>
				<br>
			</div>

			<div class="col-md-3 f-header">
				<div class="x-header">
					<a href="/group"><b>KSP Kabupaten Tasikmalaya</b></a>
				</div>
				<div class="x-sender">
					<!-- Deskripsi Grup --> Pertemanan KSP-KSP yang ada di kota dan kabupaten tasikmalaya
				</div>
				<div class="x-date">
					34 anggota
				</div>
				<br>
			</div>

			<div class="col-md-3 f-header">
				<div class="x-header">
					<a href="/group"><b>Grup Pengerajin Rotal</b></a>
				</div>
				<div class="x-sender">
					<!-- Deskripsi Grup --> Mengumpulkan inovasi untuk seluruh pengerajin rotan Jawa Barat
				</div>
				<div class="x-date">
					3 anggota
				</div>
				<br>
			</div>

			<div class="col-md-3 f-header">
				<div class="x-header">
					<a href="/group"><b>Susu Olahan Sudimakmur</b></a>
				</div>
				<div class="x-sender">
					<!-- Deskripsi Grup --> Perkumpulan Petani, Pengolah, dan Pemasar untuk produk susu lembang
				</div>
				<div class="x-date">
					18 anggota
				</div>
				<br>
			</div>
			
			<div class="col-md-3 f-header">
				<div class="x-header">
					<a href="/group"><b>Koperasi Pengerajin Kerupuk</b></a>
				</div>
				<div class="x-sender">
					<!-- Deskripsi Grup --> Pengerajin dan komsumen kerupuk sekala besar ayo masuk
				</div>
				<div class="x-date">
					4 anggota
				</div>
				<br>
			</div>
		</div>
	</div>


@endsection
