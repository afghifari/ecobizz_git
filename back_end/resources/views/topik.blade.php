@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/forum.css')}}" type="text/css">

	<section class="forum-section1">
		<div id="forum">
			< Nama Forum >
		</div>
	</section>

	<section class="forum-section2">
		<center><input type="text" name="search" placeholder="Search"> <input type="submit" name="submit" value=""></center>
		<table>
			<col width="150">
			<col width="100">
			<col width="50">
			<col width="100">
			<tr>
				<th>Topik</th>
				<th>Dimulai Oleh</th>
				<th>Postingan</th>
				<th>Postingan Akhir</th>
			</tr>
			<tr>
				<td align="justify">
					<b>Lupa password</b> <br>
				</td>
				<td align="left" style="font-size: 14px">Koperasi Tirta Bangun Karya</td>
				<td>1</td>
				<td>2 bulan yang lalu</td>
			</tr>
			<tr>
				<td align="justify">
					<b>Melengkapi informasi profil</b> <br>
				</td>
				<td align="left" style="font-size: 14px">Koperasi Kerupuk Asri</td>
				<td>1</td>
				<td>1 minggu yang lalu</td>
			</tr>
			
		</table>

	</section>

@endsection
