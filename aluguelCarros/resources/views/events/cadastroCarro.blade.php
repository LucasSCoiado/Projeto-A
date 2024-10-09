@extends('layouts.main')

@section('title', 'Cadastro de carro')

@section('content')

<div id="cars-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre um carro</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Imagem do carro</label>
            <input type="file" id="image" name="image" class="from-control-file" >
        </div>
        <div class="form-group">
            <label for="title">Carro</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome do carro">
        </div>
        <div class="form-group">
            <label for="title">Descrição</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descreva o carro"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Marca do carro</label>
            <input type="text" class="form-control" id="mark" name="mark" placeholder="Marca">
        </div>
        <div class="form-group">
            <label for="date">Ano do Carro</label>
            <input type="date" class="form-control" id="date" name="date" >
        </div>
        <div class="form-group">
            <label for="title">Qual a cor do carro?</label>
            <input type="text" class="form-control" id="color" name="color" placeholder="Cor do carro">
        </div>
        <div class="form-group">
            <label for="number">Valor do aluguel</label>
            <input type="text" class="form-control" id="value" name="value" placeholder="Valor por dia">
        </div>
        <div class="form-group">
            <label for="title">O carro esta alugado?</label>
            <select name="rented" id="rented" class="form-control">
                <option value="false">Não</option>
                <option value="true">Sim</option>
            </select>
        </div>
        <div id="form-group">
            <input type="checkbox" name="items[]" value="ar Condicionado"> Ar condicionado
        </div>
        <div id="form-group">
            <input type="checkbox" name="items[]" value="manual"> Manual
        </div>
        <div id="form-group">
            <input type="checkbox" name="items[]" value="arbag"> Arbag
        </div>
        <div id="form-group">
            <input type="checkbox" name="items[]" value="capacidade2"> 2x pessoas
        </div>
        <div id="form-group">
            <input type="checkbox" name="items[]" value="capacidade5"> 4-5 pessoas
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar Carro">
    </form>
</div>

@endsection