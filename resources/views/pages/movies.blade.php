
@extends('layouts.app')


@section('title', 'Movie List')

@section('content')
    <h1>Movies</h1> 
    <ul>
        @forelse ($movies as $key=>$movie)
            <li>{{$movie->title}}-{{$key}}</li>
        @empty
            <li>NO movie</li>
        @endforelse
    </ul>

@endsection



