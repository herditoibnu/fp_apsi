@extends('template/t_index')

@section('content')
<div class="container">
	@if(Session::has('message'))
	<span class="label label-success">{{ Session::get('message') }}</span>
	@endif
	<p></p>
	<div class="table-responsive">
		<table class="table table-bordered">
			<tr>
				<th>No</th>
				<th>NIP</th>
				<th>Name</th>
				<th>Action</th>
			</tr>

			<?php $no=1; ?>
			@foreach ($dblecturer as $data)
			<tr>
				<?php $inc = $no++; ?>
				<td>{{ $inc }}</td>
				<td>{{ $data->nip_lecturer }}</td>
				<td>{{ $data->name_lecturer }}</td>
				<td>


				  	{{--Trigger the modal with a button--}}
				  	<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalHapus{{ $inc }}">Remove</button>
				 	{{--Modal--}}
					<div class="modal fade" id="myModalHapus{{ $inc }}" role="dialog">
						<div class="modal-dialog">
						    {{--Modal content--}}
						    <div class="modal-content">
						        <div class="modal-header">
						          	<button type="button" class="close" data-dismiss="modal">&times;</button>
						          	<h4 class="modal-title">Hapus</h4>
						        </div>
						        <div class="modal-body">
						          	<p>Anda yakin untuk menghapus data?</p>
						        </div>
						        <div class="modal-footer">
						        	<a href="hapus/{{ $data->nip_lecturer }}" class="btn btn-default" role="button">Yes</a>
						       		<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
					        	</div>
						    </div>
					    </div>
					</div>

					{{--Trigger the modal with a button--}}
					<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModalEdit{{ $inc }}">Edit</button>
					{{--Modal--}}
					<div class="modal fade" id="myModalEdit{{ $inc }}" role="dialog">
						<div class="modal-dialog">
							{{--Modal content--}}
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Edit</h4>
								</div>
								<div class="modal-body">
									<p>Anda ingin mengedit data?</p>
								</div>
								<div class="modal-footer">
									<a href="formedit/{{ $data->nip_lecturer }}" class="btn btn-default" role="button">Yes</a>
									<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
								</div>
							</div>
						</div>
					</div>


					{{--<a href="hapus/{{ $data->nip_lecturer }}">Hapus</a> || <a href="formedit/{{ $data->nip_lecturer }}">Edit</a>--}}
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</div>
@stop
