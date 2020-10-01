@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col">
		<div class="pull-left">
			<h2>Edit offer</h2>
		</div>
	</div>
</div>

<form action="{{ route('games.update', $game->id) }}" method="POST">
	@csrf
	@method('PUT')

	<div class="row">
		<div class="col">
			<div class="form-group">
				<strong>Name:</strong>
				<input type="text" name="name" class="form-control" value="{{ $game->name }}">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<div class="form-group">
				<strong>Price:</strong>
				<input type="number" name="price" class="form-control" step="0.01" min="0" value="{{ $game->price }}">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<div class="form-group">
				<strong>Description:</strong>
				<textarea class="form-control" name="description">{{ $game->description }}</textarea>
			</div>
		</div>
	</div>

	<div class="col text-center">
		<button type="submit" class="btn btn-primary col">Update</button>
	</div>

</form>

@endsection