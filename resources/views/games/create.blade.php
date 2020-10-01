@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Post new offer</h2>
		</div>
	</div>
</div>

<form action="{{ route('games.store') }}" method="POST">
	@csrf

	<div class="row">
		<dir class="col">
			<div class="form-group">
				<strong>Name:</strong>
				<input type="text" name="name" class="form-control">
			</div>
		</dir>
	</div>

	<div class="row">
		<dir class="col">
			<div class="form-group">
				<strong>Price:</strong>
				<input type="number" name="price" class="form-control" step="0.01" min="0">
			</div>
		</dir>
	</div>

	<div class="row">
		<div class="col">
			<div class="form-group">
				<strong>Description:</strong>
				<textarea class="form-control" name="description"></textarea>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col text-center">
			<button type="submmit" class="btn col btn-primary">POST</button>
		</div>
	</div>
</form>

@endsection