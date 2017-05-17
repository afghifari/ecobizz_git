@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/newmessage.css')}}" type="text/css">

	<section class="newmessage-section1">
		<div id="newmessage">
			Pesan Baru
		</div>
	</section>

	<section class="newmessage-section2">
		<form method="POST" action="send-message">
			<div class="row">
				<div class="col-md-12 col-md-offset-2">
					Kepada: <br>
					{!! Form::select('target_id', Auth::user()->friends()->pluck('name', 'friend_lists.friend_id'), null, ['class' => 'form-control input-sm'] ) !!}
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-12 col-md-offset-2">
					Pesan: <br>
					<textarea name="pesan" wrap="hard"></textarea>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-11">
					<button class="btn btn-success pull-right" style="margin-right: 20px;">Kirim</button></div>
				</div>

			</div>
		</form>


	</section>

@endsection
