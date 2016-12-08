@extends('template/t_index')

@section('content')
<div class="container">
<p></p>
	<div class="panel panel-default">
		<div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Register
			@if(Session::has('message'))
			<span class="label label-danger">{{ Session::get('message') }}</span>
			@endif
		</div>
		<div class="panel-body">
			<form action="{{ url('tambahlogin') }}" method="POST">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				Username: @if($errors->has('username'))
				<br>
					<span class="label label-danger">{!! $errors->first('username') !!}</span>
				<p></p>
					@endif
				<input type="text" class="form-control" name="username" placeholder="Username">
				Password: @if($errors->has('password'))
				<br>
					<span class="label label-danger">{!! $errors->first('password') !!}</span>
				<p></p>
					@endif
				<input type="password" class="form-control" name="password" placeholder="Password">
				<p></p>
				<input type="submit" class="btn btn-danger" value="Register">
			</form>
		</div>
	</div>
</div>
@stop	

