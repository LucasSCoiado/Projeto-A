@extends('layouts.main')

@section('title', 'carros')

@section('content')


<div id="cars-container" class="col-md-12">
    <h1>Carros de nossa empresa</h1>    
    <div id="cards-container" class="row">
        <h2>Carros disponiveis</h2>
        @foreach ($cars as $car )
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
    </div>
    <div id="cards-container" class="row">
    @auth
        <h2>Carros alugados</h2>
        @foreach ($cars as $car )
            @if ($car->rented ==1)
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
        
    @endauth
    </div>
</div>
@endsection