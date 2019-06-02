@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Produtos no carrinho</h3>
    @if (Session::has('mensagem-sucesso'))
        <div class="alert alert-success">
            <strong>{{ Session::get('mensagem-sucesso') }}</strong>
        </div>
    @endif
    @if (Session::has('mensagem-falha'))
        <div class="alert alert-danger">
            <strong>{{ Session::get('mensagem-falha') }}</strong>
        </div>
    @endif
    <div class="border rounded p-4">
        @forelse ($pedidos as $pedido)
            @php
                $total_pedido = 0;
            @endphp
            <table class="py-2 mt-2 align-items-center text-center" width="100%">
                <thead>
                    <tr>
                        <th colspan="2"></th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Valor Unitário</th>
                        <th class="text-right">Valor Total</td>
                    <tr>
                </thead>
                <tbody>
                @foreach ($pedido->pedido_produtos as $pedido_produto)
                    <tr>
                        <td width="5%">
                            <a class="mr-2" href="#" onclick="carrinhoRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 0)">
                                <i class="fas fa-times-circle" style="font-size: 20px;"></i>
                            </a>
                        </td>
                        <td width="150px">
                            <img width="150px" height="100px" src="{{ $pedido_produto->produto->imagem }}">
                        </td>
                        <td>
                            <div class="pl-2 text-left">{{ $pedido_produto->produto->nome }}</div>
                        </td>
                        <td width="10%">
                            <div>
                                <a class="" href="#" onclick="carrinhoRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 1 )">
                                    <i class="fas fa-minus-circle" style="font-size: 20px;"></i>
                                </a>
                                <span class=""> {{ $pedido_produto->qtd }} </span>
                                <a class="" href="#" onclick="carrinhoAdicionarProduto({{ $pedido_produto->produto_id }})">
                                    <i class="fas fa-plus-circle" style="font-size: 20px;"></i>
                                </a>
                            </div>
                        </td>
                        <td width="10%">
                            R$ {{ number_format($pedido_produto->produto->valor, 2, ',', '.') }}
                        </td>
                        @php
                            $total_produto = $pedido_produto->valores;
                            $total_pedido += $total_produto;
                        @endphp
                        <td class="text-right" width="10%">
                            R$ {{ number_format($total_produto, 2, ',', '.') }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-right mt-3">
                <b>Total do pedido:</b>
                <span>&nbsp;R$ {{ number_format($total_pedido, 2, ',', '.') }}</span>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <a class="btn btn-primary btn-lg mr-5" href="{{ route('index') }}">
                    Continuar comprando
                </a>
                <form method="POST" action="{{ route('carrinho.concluir') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
                    <button type="submit" class="btn btn-success btn-lg">
                        Concluir compra
                    </button>   
                </form>
            </div>
        @empty
            <h5>Não há nenhum pedido no carrinho</h5>
            <a class="btn btn-primary btn-lg mr-5" href="{{ route('index') }}">
                Voltar para loja
            </a>
        @endforelse
    </div>
</div>

<form id="form-remover-produto" method="POST" action="{{ route('carrinho.remover') }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <input type="hidden" name="pedido_id">
    <input type="hidden" name="produto_id">
    <input type="hidden" name="item">
</form>
<form id="form-adicionar-produto" method="POST" action="{{ route('carrinho.adicionar') }}">
    {{ csrf_field() }}
    <input type="hidden" name="id">
</form>

<script type="text/javascript" src="/js/carrinho.js"></script>
@endsection
