@extends('layouts.main')

@section('title', 'carros')

@section('content')

    <h1>Esta é a página de carros</h1>
    @if($busca !='')
        <p>O usuario esta procurando por: {{$busca}} </p>
    @endif
    <a href="/" >HOME</a>
@endsection