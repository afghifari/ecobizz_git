@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{ URL::asset('css/message.css') }}" type="text/css">

	<section class="message-section1">
		<div id="message">
			Albert
		</div>
	</section>

	<section class="message-section2">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-md-1">
						<!-- profile picture --> <img src="/assets/circle.png" width="50">
					</div>
					<div class="col-md-9 f-header-sender">
						<div class="x-date">
							1 April 2017 @ 20.17 WIB
						</div>
						<div class="x-sender">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce est erat, fermentum id odio quis, scelerisque ultricies erat.
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-9 f-header-receiver col-md-offset-3">
						<div class="x-date">
							1 April 2017 @ 20.17 WIB
						</div>
						<div class="x-sender">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce est erat, fermentum id odio quis, scelerisque ultricies erat.
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-1">
						<!-- profile picture --> <img src="/assets/circle.png" width="50">
					</div>
					<div class="col-md-9 f-header-sender">
						<div class="x-date">
							1 April 2017 @ 20.17 WIB
						</div>
						<div class="x-sender">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce est erat, fermentum id odio quis, scelerisque ultricies erat.
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-9 f-header-receiver col-md-offset-3">
						<div class="x-date">
							1 April 2017 @ 20.17 WIB
						</div>
						<div class="x-sender">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce est erat, fermentum id odio quis, scelerisque ultricies erat.
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<textarea placeholder="Tulis pesan.." wrap="hard" style="padding: 10px;"></textarea>
						<br>
						<button class="btn btn-success pull-right" style="margin-right: 30px;">Kirim</button>
					</div>
				</div>
			</div>
		</div>

	</section>

@endsection
