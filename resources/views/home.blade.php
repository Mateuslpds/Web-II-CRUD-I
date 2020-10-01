@extends('layouts.app')

@section('content')

    @foreach ($games as $game)

        <div class="card">
            <div class="card-header">
                <h1>{{ $game->name }}</h1>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $game->price }}</p>
                <p class="card-text">{{ $game->description }}</p>
            </div>
            <div class="card-footer text-muted">
                <div class="row">
                    <div class="col-6">Created: {{ $game->created_at }}</div>
                    <div class="col-6">Updated: {{ $game->updated_at }}</div>
                </div>
            </div>
        </div>

    @endforeach

@endsection
