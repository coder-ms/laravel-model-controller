
@extends('layouts.app')


@section('title', 'Movie List')

@section('content')
    <h1>Movies</h1> 
    {{$movies['titolo']}}
    <br>    
    {{$movies['autore']}}
    <br>
    {{$movies['data']}}
@endsection



