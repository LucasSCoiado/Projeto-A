@extends('layouts.main')

@section('title', 'funcionario')

@section('content')
    @if($id != null)
        <p>Exibindo o ID do funcionario {{$id}}</p>
    @endif
@endsection