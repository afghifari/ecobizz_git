@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="<?php echo asset('css/forum.css')?>" type="text/css"> 

	<section class="forum-section1">
		<div id="forum">
			Forum
		</div>
	</section>

	<section class="forum-section2">
		<center><input type="text" name="search" placeholder="Search"> <input type="submit" name="submit" value=""></center>
		<table>
			<col width="200">
			<col width="50">
			<col width="50">
			<col width="100">
			<tr>
				<th>Forum</th>
				<th>Topik</th>
				<th>Postingan</th>
				<th>Postingan Akhir</th>
			</tr>
			<tr>
				<td align="justify">
					<b>Bantuan Penggunaan Platform</b> <br>
					Forum ini dikhususkan untuk diskusi mengenai keuntungan dan cara menggunakan platform Ecobiz KUKM
				</td>
				<td align="center">1</td>
				<td align="center">1</td>
				<td align="center">2 bulan yang lalu</td>
			</tr>
			<tr>
				<td align="justify">
					<b>Kemitraan dan Kolaborasi</b> <br>
					Pembicaraan mengenai segala sesuatu seputar kemitraan dan kolaborasi
				</td>
				<td align="center">1</td>
				<td align="center">1</td>
				<td align="center">1 minggu yang lalu</td>
			</tr>
		</table>
		
	</section>

@endsection