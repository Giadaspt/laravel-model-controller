@extends('layouts.app')

@section('content')

<section class="container mt-5">

  @forelse ($britishMovies as $britishMovie)
    <div class="movieCard p-4">
      <h4>
        {{ $britishMovie->title }}
      </h4>
      <h6>
        {{ $britishMovie->original_title}}
      </h6>
      <p>
        Data di uscita:
        {{ $britishMovie->date }}
      </p>
      <p>
        Nazionalità:
        {{ $britishMovie->nationality }}
      </p>
      <p>
        Voto:
        {{ $britishMovie->vote }}
      </p>
    </div>
      @empty
        <h3>
          Nessun Film trovato
        </h3>
      @endforelse
</section>
  
@endsection