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
			<div class="col-xs-10 col-xs-offset-1">
				@foreach ($messages as $message)
					@if ($message->source_id != Auth::user()->id)
						<div class="row">
							<div class="col-xs-1">
								<!-- profile picture --> <img src="{{$target->profile_picture}}" width="50"><br><br>
							</div>
							<div class="col-xs-9">
								<div class="f-header-sender">
									<div class="x-date">
										{{$message->created_at}}
									</div>
									<div class="x-sender">
										{{$message->message}}
									</div>
								</div>
							</div>
						</div>
					@else
						<div class="row">
							<div class="col-xs-9 col-xs-offset-3">
								<div class="f-header-receiver">
									<div class="x-date">
										{{$message->created_at}}
									</div>
									<div class="x-sender">
										{{$message->message}}
									</div>
								</div>
							</div>
						</div>
					@endif
				@endforeach
				<br>
				<div class="row">
					<div class="col-xs-12">
					<form action="/send-message" method="post">
						<input type="hidden" name="target_id" value="{{$target->id}}">
						<textarea name="pesan" placeholder="Tulis pesan.." wrap="hard" style="padding: 10px;"></textarea>
						<br>
						<button class="btn btn-success pull-right" style="margin-right: 30px;">Kirim</button>
					</form>
					</div>
				</div>
			</div>
		</div>

	</section>

@endsection
