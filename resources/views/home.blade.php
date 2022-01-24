@extends('layouts.app')

@section('content')

  <section class="container mt-5">

    @forelse ($movies as $movie)
      <div class="movieCard p-4">
        <h4>
          {{ $movie->title }}
        </h4>
        <h6>
          {{ $movie->original_title}}
        </h6>
        <p>
          Data di uscita:
          {{ $movie->date }}
        </p>
        <p>
          Nazionalità:
          {{ $movie->nationality }}
        </p>
        <p>
          Voto:
          {{ $movie->vote }}
        </p>
      </div>
        @empty
          <h3>
            Nessun Film trovato
          </h3>
        @endforelse
  </section>
  
@endsection