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
							<td align="center"><button>Edit</button></td>
							<td align="center"><button>Hapus</button></td>
						</tr>
						<tr>
							<td align="justify">
								<b>Forum 2</b>
							</td>
							<td align="center"><button>Edit</button></td>
							<td align="center"><button>Hapus</button></td>
						</tr>
					</table><br>
					Forum Baru<br>
					<input type="text" name="judul" placeholder="Judul"><br>
					<input type="text" name="deskripsi" placeholder="Deskripsi"><br>
					<button class="button1" style="float: right;">Tambah Forum</button>
					<br><br>
				</div>

				<div style="clear: both;"></div>

				<div class="section-title">
					Statistik User
				</div>
				<div class="total-user">
					Jumlah pengguna: <b>X</b> orang<br><br>
					Pengguna baru hari ini: <b>X</b> orang<br><br>
					Jumlah pengguna per kategori: <br>
					<div style="margin-left: 20px;">
						Dekopinda: <b>X</b> orang<br>
						Dekopinwil: <b>X</b> orang<br>
						Eksportir: <b>X</b> orang<br>
						Investor: <b>X</b> orang<br>
						ICT: <b>X</b> orang<br>
						Konsultan: <b>X</b> orang<br>
						Koperasi: <b>X</b> orang<br>
						Perguruan Tinggi: <b>X</b> orang<br>
						Industri: <b>X</b> orang<br>
						Lainnya: <b>X</b> orang<br>
					</div>
					<br>
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
