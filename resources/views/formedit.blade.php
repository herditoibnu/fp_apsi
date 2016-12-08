@extends('template/t_index')

@section('content')
<div class="container">
	@if(Session::has('message'))
	<span class="label label-success">{{ Session::get('message') }}</span>
	@endif
	<p></p>
	<div class="panel panel-default">
		
		<div class="panel-heading">Ubah Data</div>
		
		<div class="panel-body">
			<form action="{{ url('prosesedit') }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" class="form-control" name="id" value="{{ $siswa->id }}">
				Nama:
				<input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}">
				Alamat:
				<input type="text" class="form-control" name="alamat" value="{{ $siswa->alamat }}">
				Kelas:
				<input type="text" class="form-control" name="kelas" value="{{ $siswa->kelas }}">
				<p></p>
				<input type="submit" class="btn btn-danger" value="Ubah Data">
			</form>
		</div>
	</div>
</div>
@stop	

