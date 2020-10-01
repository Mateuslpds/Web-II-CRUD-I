@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col">
		<div class="pull-left">
			<h2>Show offer</h2>
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="form-group">
			<strong>Name:</strong>
			{{ $game->name }}
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="form-group">
			<strong>Price:</strong>
			{{ $game->price }}
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="form-group">
			<strong>User:</strong>
			{{ $game->user->name }}
		</div>
	</div>
</div>

<div class="row">
	<div class="col">
		<div class="form-group">
			<strong>Description:</strong>
			{{ $game->description }}
		</div>
	</div>
</div>

@endsection