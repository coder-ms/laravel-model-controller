
@extends('layouts.app')


@section('title', 'Movie List')

@section('content')
    <h1>Movies</h1> 
    <div class="containerx">
        @forelse ($movies as $key=>$movie)
        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="{{$movie->image}}" alt="{{$movie->title}}">
              </div>
              <div class="flip-card-back">
                <h3>{{$movie->title}}</h3>
                <h5>{{$movie->original_title}}</h5>
                <p>{{$movie->nationality}}</p>
                <p>Data di uscita: {{$movie->date}}</p>
                <p>Voto: {{$movie->vote}}/10</p>
              </div>
            </div>
        </div>
        @empty
            <div>NO movie</div>
        @endforelse
    </div>

@endsection



