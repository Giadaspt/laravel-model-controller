@extends('layouts.app')

@section('content')

  <section class="container my-3">

    @forelse ($movies as $movie)
      <div class="card">
        <h5>
          {{ $movie->title }}
        </h5>
        <h6>
          {{ $movie->original_title}}
        </h6>
        <p>
          {{ $movie->date }}
        </p>
        <p>
          {{ $movie->nationality }}
        </p>
        <p>
          {{ $movie->vote }}
        </p>
      </div>
    @empty
      
    @endforelse
  </section>
  
@endsection