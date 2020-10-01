@extends('layouts.app')
@section('content')

<div class="row">
	<div class="col">
		<div class="pull left">
			<h2>Offers currently available</h2>
		</div>
	</div>
</div>

<table class="table table-bordered">
	<tr>
		<th>Name</th>
		<th>Price</th>
		<th>User</th>
		<th width="280px">Action</th>
	</tr>
	@foreach ($games as $game)
	<tr>
		<td>{{ $game->name }}</td>
		<td>{{ $game->price }}</td>
		<td>{{ $game->user->name }}</td>

		<td>
			<form action="{{ route('games.destroy', $game->id) }}" method="POST">
				<a class="btn btn-primary" href="{{ route('games.show', $game->id) }}">Show</a>
				<a class="btn btn-info" href="{{ route('games.edit', $game->id) }}">Edit</a>
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>

{{ $games->links() }}

@endsection