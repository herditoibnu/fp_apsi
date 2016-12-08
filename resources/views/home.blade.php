@extends('template/t_index')

@section('content')
<div class="container">
<p></p>
	<div class="panel panel-default">
		<div class="panel-heading">Insert Lecturer</div>
		<div class="panel-body">
			<form action="{{ url('prosestambah') }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				NIP:  @if($errors->has('nip_lecturer'))
				<br>
					<span class="label label-danger">{!! $errors->first('nip_lecturer') !!}</span>
				<p></p>
				@endif
				<input type="text" class="form-control" name="nip_lecturer" placeholder="NIP">

				Name:  @if($errors->has('name_lecturer'))
				<br>
					<span class="label label-danger">{!! $errors->first('name_lecturer') !!}</span>
				<p></p>
				@endif
				<input type="text" class="form-control" name="name_lecturer" placeholder="Name">

				<a href="{{ url('logout') }}">Logout</a>
				<p></p>
				<input type="submit" class="btn btn-danger" value="Insert Data">
			</form>
		</div>
	</div>
</div>
@stop
