@extends('layouts.app')

@section('title', 'Lista dei film')

@section('main-content')
    <section>
        <div class="container py-4">


      

                    <div class="card h-100">
                        <div class="card-body">
                            <h5>Titolo: {{ $movie->title }}</h5>
                            <p>Titolo Originale: <span class="fw-bold">{{ $movie->original_title }}</span></p>
                            <p>Nazionalità: <span class="fw-bold">{{ $movie->nationality }}</span></p>
                            <p>Data Uscita: <span class="fw-bold">{{ $movie->date }}</span></p>
                            <p>Voto: <span class="fw-bold">{{ $movie->vote }}</span></p>
                            
                        </div>
                    </div>
          

         
                
            </div>
        </section>
@endsection