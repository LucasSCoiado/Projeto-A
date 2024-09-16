@extends('layouts.main')

@section('title', 'carro')

@section('content')
    @if($id != null)
        <p>Exibindo o ID do cliente {{$id}}</p>
    @endif
@endsection