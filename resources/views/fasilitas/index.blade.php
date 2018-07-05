@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
			<div class="panel-heading">Taman Kanak Kanak </div>
					<div class="panel-heading">Data
						<div class="panel-title pull-right">
							<a href="{{route('fasilitas.create')}}">Tambah</a>
						</div>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>NO</th>
										<th>JUDUL</th>
										<th>GAMBAR</th>
										<th>DESKRIPSI</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach ($fasilitas as $data)
									<tr>
								<td>{{ $no++ }}</td>
				    			<td>{{ $data->judul }}</td>
				    			<td>{{ $data->gambar }}</td>
				    			<td>{{ $data->deskripsi}}</td>
										<td>
											<a href="{{route('fasilitas.edit', $data->id)}}" class="btn btn-warning">Edit</a>
										</td>
										<td>
											<form method="post" action="{{route('fasilitas.destroy' ,$data->id)}}">
												<input type="hidden" name="_token" value="{{csrf_token()}}">
												<input type="hidden" name="_method" value="DELETE">
												<button class="btn btn-danger" type="submit">Delete</button>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection