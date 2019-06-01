@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img class="card-img" src="{{ $registro->imagem }}">
        </div>
        <div class="col-6">
            <h3>{{ $registro->nome }}</h3>
            <p class="card-text">{{ $registro->descricao }}</p>
            <h3 class="text-success"><b>R$ {{ number_format($registro->valor, 2, ',', '.') }}</b></h3>

            <form method="POST" action="{{ route('carrinho.adicionar') }}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $registro->id }}">
                <button class="btn btn-lg btn-success">Comprar</button>   
            </form>
        </div>
    </div>
</div>
@endsection