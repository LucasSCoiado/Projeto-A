@extends('layouts.main')

@section('title', 'Alugue seu carro')

@section('content')

    
    <h1>--Algum titulo</h1>

    <img src="/img/banner.jpg" alt="Banner">

    @if (10>5)
        <p>--A condição é verdadeira</p>
    @endif

    <p>--O nome dele é {{$nome}}</p>

    @if ($nome == 'João')
        <p>--O nome é João</p>
    @else
        <p>--O nome não é João</p>
    @endif

    @if ($idade == 22)
        <p>--Ele tem 22 anos</p>
    @else
        <p>--Ele não tem 22 anos</p>
    @endif

    @for ($i=0;$i<count($arr);$i++)
        <p>--{{$arr[$i] }} - {{$i}} </p>
        @if ($i == 2)
            <p>--O I é 2</p>
        @endif
    @endfor

    @foreach ($nomes as $nome)
        <p>--{{$loop->index}}</p>
        <p>--{{$nome}}</p>
    @endforeach

@endsection