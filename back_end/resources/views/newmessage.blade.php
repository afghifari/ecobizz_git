@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/newmessage.css')}}" type="text/css">

	<section class="newmessage-section1">
		<div id="newmessage">
			Pesan Baru
		</div>
	</section>

	<section class="newmessage-section2">
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				Kepada: <br>
				<input type="text" name="kepada">
			</div>		
		</div>
		<br>
		<div class="row">
			<div class="col-md-12 col-md-offset-2">
				Pesan: <br>
				<input type="textarea" name="pesan" wrap="hard" style="vertical-align: top;">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-11">
				<button class="btn btn-success pull-right">Kirim</button></div>
			</div>
			
		</div>
		

	</section>

@endsection
