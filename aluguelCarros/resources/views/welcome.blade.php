@extends('layouts.main')

@section('title', 'Alugue seu carro')

@section('content')

<style>
    #search {
        width: 90%;
        border-radius: 10;
    }
    .col-md-12{
        margin-left: 20px;
    }
    </style>

<div id="search-container" class="col-md-12">
    <h1>Escolha seu carro</h1>
    <form action="/" method="get">
        <input type="text" id="search" name="search" class="form-control" placeholder="Escolha..." >
    </form>
    
</div>
<div id="cars-container" class="col-md-12">
    @if ($search)
        <h2>Buscando por: {{$search}}</h2>
    @else
        <h2>Carros da empresa: </h2>
    @endif
    <p class="subtitle">Estes são nossos carros</p>
    <div id="cards-container" class="row">
        @foreach ($cars as $car)
        @if ($car->rented == 0)        
            <div class="card col-md-3"logo.jpg>
                <img src="/img/cars/{{$car->image}}" alt="{{$car->name}}">
                <div class="card-body">
                    <p class="card-date">{{date('Y', strtotime($car->date))}}</p>
                    <h5 class="card-name">{{$car->name}}</h5>
                    <p class="card-unidades">R${{$car->value}}</p>
                    <a href="/events/{{ $car->id}}" class="btn btn-primary">Saber mais</a>
                    
                </div>
            </div>
        @endif
        @endforeach
        @if (count($cars)==0 && $search)
            <p>Não estamos com o {{$search}} no momento! <a href="/">Voltar ao menu</a></p>
        @elseif(count($cars)==0)
            <p>Não temos carros no momento</p>
        @endif
    </div>
</div>

@endsection