@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/admin.css')}}" type="text/css">

	<section class="admin-section1">
		<div id="admin">
			Halaman Admin
		</div>
	</section>

	<section class="admin-section2">
		<div class="container">
			<div id="left">
				<div class="section-title">
					Kelola Forum<br>
				</div>
		
				<div class="section-content">
					<table>
						<col width="210">
						<col width="200">
						<col width="200">
						<tr>
							<td align="justify">
								<b>Forum 1</b>
							</td>
							<td align="center">Edit</td>
							<td align="center">Hapus</td>
						</tr>
						<tr>
							<td align="justify">
								<b>Forum 2</b>
							</td>
							<td align="center">Edit</td>
							<td align="center">Hapus</td>
						</tr>
					</table>
				</div>

				<div class="section-title">
					Dashboard Statistik
				</div>
			</div>

			<div id="right">
				<div class="section-title">
					Export Data User
				</div>
				<div class="section-content">
					<button class="button1">XLSX</button>
					<button class="button1">CSV</button>
				</div>
				<div class="section-title">
					Import Data User
				</div>
				<div class="section-content">
					<button class="button1">XLSX</button>
					<button class="button1">CSV</button>
				</div>
			</div>
		</div>
		
		
		
	</section>

@endsection
