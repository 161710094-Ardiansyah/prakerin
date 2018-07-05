@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
			<div class="panel-heading">Taman Kanak Kanak </div>
					<div class="panel-heading">Edit
						<div class="panel-title pull-right">
							<a href="{{route('galeri.index')}}">Kembali</a>
						</div>
					</div>
					<div class="panel-body">
						<form action="{{route('galeri.update', $gallery->id)}}" method="post">
							<input type="hidden" name="_method" value="PATCH">
							{{csrf_field()}}

							<div class="form-group {{$errors->has('gambar') ? 'has-error' : ''}}">
								<label class="control-label">GAMBAR</label>
								<input type="file" name="gambar" class="form-control" value="{{$gallery->gambar}}" required>
								@if ($errors->has('gambar'))
									<span class="help-blocks">
										<strong>{{$errors->first('gambar')}}</strong>
									</span>
								@endif
							</div>

							<div class="form-group">
								<button class="btn btn-primary" type="submit">Edit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection