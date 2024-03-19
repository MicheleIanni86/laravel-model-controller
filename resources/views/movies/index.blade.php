@extends('layouts.app')

@section('title', 'Lista dei film')

@section('main-content')
    <section>
        <div class="container py-4">
            <div class="row g-3">

                @forelse ($movies as $movie)
                <div class="col-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5>{{ $movie->title }}</h5>
                            <a href="{{ route('movies.show', $movie) }}">Info Movie</a>
                        </div>
                    </div>
                </div>
                    @empty
                    <div class="col-12">
                        No movies
                    </div>
                    @endforelse
            </div>
                
            </div>
        </section>
@endsection