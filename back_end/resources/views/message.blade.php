@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{ URL::asset('css/message.css') }}" type="text/css">

	<section class="message-section1">
		<div id="message">
			Pesan
		</div>
	</section>

	<section class="message-section">
		<div>
			<button id="newmsg">
				+ New Message
			</button>
			<div class="friends">
				<td>
					<button>Junet</button>
				</td>
				<br>
				<td>
					<button>Doni</button>
				</td>
				
			</div>
		</div>
		<div>
			<div id="friend">Junet</div>
			<div id="their-messages">Auauauau Message dari dia</div>
			<div id="own-messages">Uauauaua message dari saya</div>
			<input type="text" name="message" placeholder="Write a message...">
			<button>Send</button>
		</div>
	</section>

@endsection
