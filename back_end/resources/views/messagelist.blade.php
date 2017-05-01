@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/message.css')}}" type="text/css">

	</div>
	<section class="message-section1">
		<div id="message">
			Pesan Masuk
		</div>
	</section>

	<div class="row">
		<div class="col-md-10 col-md-offset-1 search-section" style="padding: 0">
			<!-- <input type="text" name="search" placeholder="Search"> <input type="submit" name="submit" value=""> -->
		</div>
	</div>
	<div class="row message">
		<div class="col-md-10 col-md-offset-1">
			
			<!-- JIKA TIDAK ADA PESAN -->
			<!-- <div class="row f-header">
				<div class="col-md-12">
					Tidak ada pesan masuk
				</div>
			</div> -->

			<div class="row f-header">
				<div class="col-md-1">
					<!-- profile picture --> <img src="/assets/circle.png" width="50">
				</div>
				<div class="col-md-10">
					<div class="x-header">
						<a href="#"><b>Albert</b></a>
					</div>
					<div class="x-sender">
						<!-- preview --> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce est erat, fermentum id odio quis, scelerisque ultricies erat.
					</div>
					<div class="x-date">
						1 April 2017 @ 20.17 WIB
					</div>
				</div>

				<div class="col-md-1">
					<div class="row view-profile">
						Lihat Pesan
					</div>
				</div>
			</div>

			<div class="row f-header">
				<div class="col-md-1">
					<!-- profile picture --> <img src="/assets/circle.png" width="50">
				</div>
				<div class="col-md-10">
					<div class="x-header">
						<a href="#"><b>Albert</b></a>
					</div>
					<div class="x-sender">
						<!-- preview --> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce est erat, fermentum id odio quis, scelerisque ultricies erat.
					</div>
					<div class="x-date">
						1 April 2017 @ 20.17 WIB
					</div>
				</div>

				<div class="col-md-1">
					<div class="row view-profile">
						Lihat Pesan
					</div>
				</div>
			</div>

			<div class="row f-header">
				<div class="col-md-1">
					<!-- profile picture --> <img src="/assets/circle.png" width="50">
				</div>
				<div class="col-md-10">
					<div class="x-header">
						<a href="#"><b>Albert</b></a>
					</div>
					<div class="x-sender">
						<!-- preview --> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce est erat, fermentum id odio quis, scelerisque ultricies erat.
					</div>
					<div class="x-date">
						1 April 2017 @ 20.17 WIB
					</div>
				</div>

				<div class="col-md-1">
					<div class="row view-profile">
						Lihat Pesan
					</div>
				</div>
			</div>

			<div class="row f-header">
				<div class="col-md-1">
					<!-- profile picture --> <img src="/assets/circle.png" width="50">
				</div>
				<div class="col-md-10">
					<div class="x-header">
						<a href="#"><b>Albert</b></a>
					</div>
					<div class="x-sender">
						<!-- preview --> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce est erat, fermentum id odio quis, scelerisque ultricies erat.
					</div>
					<div class="x-date">
						1 April 2017 @ 20.17 WIB
					</div>
				</div>

				<div class="col-md-1">
					<div class="row view-profile">
						Lihat Pesan
					</div>
				</div>
			</div>
			
		</div>
	</div>


@endsection
