@extends('template_backend.home')
@section('sub-judul', 'Tambah Tag')
@section('content')
<div class="row">
	<div class="col">
		@if(session('success'))
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			{{  session('success') }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		@endif
		<form action="{{ route('tag.store') }}" method="POST">
			@csrf
			<div class="form-group">
				<label for="">Tag</label>
				<input type="text" name="tag" class="form-control" value="{{ old('tag') }}">
				@error('tag')
				<small class="text-danger">{{ $message }}</small>
				@enderror
			</div>
			
			<div class="float-right">
				<a href="{{ route('tag.index') }}" class="btn btn-info">Kembali</a>
				<button class="btn btn-primary">Tambah</button>
			</div>
		</form>
	</div>
</div>
@endsection