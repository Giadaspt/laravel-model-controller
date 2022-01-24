@extends('layouts.app')

@section('content')

<section class="container mt-5">

  @forelse ($americanMovies as $americanMovie)
    <div class="movieCard p-4">
      <h4>
        {{ $americanMovie->title }}
      </h4>
      <h6>
        {{ $americanMovie->original_title}}
      </h6>
      <p>
        Data di uscita:
        {{ $americanMovie->date }}
      </p>
      <p>
        Nazionalità:
        {{ $americanMovie->nationality }}
      </p>
      <p>
        Voto:
        {{ $americanMovie->vote }}
      </p>
    </div>
      @empty
        <h3>
          Nessun Film trovato
        </h3>
      @endforelse
</section>
  
@endsection