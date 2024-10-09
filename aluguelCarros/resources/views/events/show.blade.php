@extends('layouts.main')

@section('title', $car->name)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
            <img src="/img/cars/{{$car->image}}" class="img-fluid" alt="{{$car->name}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$car->name}}</h1>
                <p class="car-mark"><ion-icon name="car-sport-outline"></ion-icon> {{$car->mark}} </p>
                <p class="car-color"><ion-icon name="color-filter-outline"></ion-icon>{{$car->color}} </p>
                <p class="car-value"><ion-icon name="cash-outline"></ion-icon> R${{$car->value}} </p>
                <a href="#" class="btn btn-primary" id="car-submit">Alugar</a>
                <h3>O carro conta com:</h3>
                <ul id="items-list">
                    @foreach ($car->items as $item)
                        <li><ion-icon name="play-outline"></ion-icon>  <span>{{$item}}</span></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o carro</h3>
                <p class="car-description">{{$car->description}}</p>
            </div>
        </div>
    </div>

@endsection