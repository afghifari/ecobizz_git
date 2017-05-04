@extends('layouts.app')

@section('content')
	<link rel="stylesheet" href="{{asset('css/admin.css')}}" type="text/css">

	<section class="admin-section1">
		<div id="admin">
			Halaman Admin
		</div>
	</section>

	{{-- Ini Error --}}
	@if (session()->has('success'))
		@if (session()->get('success'))
			<div class="alert alert-success">
                {{session()->get('message')}}<br>
            </div>
		@else
			<div class="alert alert-danger">
                <ul>
                    @foreach (session()->get('errors')->all() as $error)
						{{$error}}<br>
					@endforeach
                </ul>
            </div>
		@endif
	@endif

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
						@foreach ($forums as $forum)
							<tr>
								<td align="justify">
									<b>{{$forum->name}}</b>
								</td>
								<td align="center"><button onclick="window.location.href='/admin?forumId={{$forum->id}}'">Edit</button></td>
								<td align="center"><button onclick="window.location.href='/admin/delete?forumId={{$forum->id}}'">Hapus</button></td>
							</tr>
						@endforeach
					</table><br>
					{!! Form::open(['method' => 'post', 'url' => url('admin')]) !!}
					@if ($forum = \App\Forum::find($forumId))
						Edit Forum<br>
						<input type="text" name="judul" placeholder="Judul" value="{{$forum->name}}"><br>
						<input type="text" name="deskripsi" placeholder="Deskripsi" value="{{$forum->description}}"><br>
						<input type="hidden" name="forumId" value={{$forumId}}>
						<button class="button1" style="float: right;">Edit Forum</button>
					@else
						Forum Baru<br>
						<input type="text" name="judul" placeholder="Judul"><br>
						<input type="text" name="deskripsi" placeholder="Deskripsi"><br>
						<input type="hidden" name="forumId" value=-1>
						<button class="button1" style="float: right;">Tambah Forum</button>
					@endif
					{!! Form::close() !!}
					<br><br>
				</div>

				<div style="clear: both;"></div>

				<div class="section-title">
					Statistik User
				</div>
				<div class="total-user">
					Jumlah pengguna: <b>{{count(App\User::all())}}</b> orang<br><br>
					Pengguna baru hari ini: <b>{{count(App\User::newUsers())}}</b> orang<br><br>
					Jumlah pengguna per kategori peran: <br>
					<div style="margin-left: 20px;">
						<justify>
						@foreach ($roles as $role)
							{{$role->name}}: <b>{{count($role->users)}}</b> orang<br>
						@endforeach
							Unknown: <b> {{count(App\User::where('role_id', null))}}</b> orang<br>
						</justify>
					</div>
					<br>
				</div>
			</div>

			<div id="right">
				<div class="section-title">
					Kelola Peran Pengguna
				</div>
				<div class="section-content">
					<table>
						<col width="210">
						<col width="200">
						<col width="200">
						@foreach ($roles as $role)
							<tr>
								<td align="justify">
									<b>{{$role->name}}</b>
								</td>
								<td align="center"><button onclick="window.location.href='/admin?categoryId={{$role->id}}'">Edit</button></td>
								<td align="center"><button onclick="window.location.href='/admin/delete?categoryId={{$role->id}}'">Hapus</button></td>
							</tr>
						@endforeach
					</table><br>
					{!! Form::open(['method' => 'post', 'url' => url('admin')]) !!}
					@if ($category = App\Role::find($categoryId))
						Edit Peran<br>
						<input type="text" name="kategori" placeholder="Peran" value="{{$category->name}}"><br>
						<input type="hidden" name="categoryId" value={{$categoryId}}>
						<button class="button1" style="float: right;">Edit Peran</button>
					@else
						Peran Baru<br>
						<input type="text" name="kategori" placeholder="Peran"><br>
						<input type="hidden" name="categoryId" value=-1>
						<button class="button1" style="float: right;">Tambah Peran</button>
					@endif
					{!! Form::close() !!}
					<br><br>
				</div>
				<div class="section-title">
					Export Data
				</div>
				<div class="section-content">
					<button class="button1" onclick="window.location.href='/export?mode=USER'">USER</button>
					<button class="button1" onclick="window.location.href='/export?mode=FORUM'">FORUM</button>
					<button class="button1" onclick="window.location.href=''">CHAT</button>
				</div>
				<div class="section-title">
					Import Data (User)
				</div>
				<div class="section-content">
				{!! Form::open(['method' => 'post', 'url' => url("import"), 'files' => true]) !!}
					<input type="file" name="file">
					<button class="button1">IMPORT</button>
				{!! Form::close() !!}
					{{-- <button class="button1">FORUM</button> --}}

				</div>
			</div>
		</div>



	</section>

@endsection
