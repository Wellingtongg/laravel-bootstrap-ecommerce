@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Compras concluídas</h3>
    @if (Session::has('mensagem-sucesso'))
        <div class="alert alert-success">{{ Session::get('mensagem-sucesso') }}</div>
    @endif
    @if (Session::has('mensagem-falha'))
        <div class="alert alert-danger">{{ Session::get('mensagem-falha') }}</div>
    @endif
    <div class="border rounded p-4">
        @forelse ($compras as $key => $pedido)
            <b> Pedido: {{ $pedido->id }} </b>
            <b class="ml-5"> Criado em: {{ $pedido->created_at->format('d/m/Y H:i') }} </b>
            <form method="POST" action="{{ route('carrinho.cancelar') }}">
                {{ csrf_field() }}
                <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
                <table class="py-2 mt-2 align-items-center text-center" width="100%">
                    <thead>
                        <tr>
                            <th colspan="2"></th>
                            <th>Produto</th>
                            <th class="text-right">Valor Unitário</td>
                        <tr>
                    </thead>
                    <tbody>
                        @php
                            $total_pedido = 0;
                        @endphp
                        @foreach ($pedido->pedido_produtos_itens as $pedido_produto)
                            @php
                                $text_danger = "";
                                $total_produto = $pedido_produto->valor;
                                if ($pedido_produto->status == 'PA') {
                                    $total_pedido += $total_produto;
                                } else {
                                    $text_danger = "text-danger";
                                }
                            @endphp
                            <tr>
                                <td width="10%">
                                    @if($pedido_produto->status == 'PA')
                                        <div>
                                            <input type="checkbox" id="item-{{ $pedido_produto->id }}" name="id[]" value="{{ $pedido_produto->id }}" />
                                            <label for="item-{{ $pedido_produto->id }}">Selecionar</label>
                                        </div>
                                    @else
                                        <strong class="text-danger">CANCELADO</strong>
                                    @endif
                                </td>
                                <td width="150px">
                                    <img width="150px" height="100px" src="{{ $pedido_produto->produto->imagem }}">
                                </td>
                                <td>
                                    <div class="pl-2 text-left">{{ $pedido_produto->produto->nome }}</div>
                                </td>
                                <td class="text-right" width="10%">
                                    <span class="{{ $text_danger }}">R$ {{ number_format($pedido_produto->produto->valor, 2, ',', '.') }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td class="text-right"><strong>Total do pedido</strong></td>
                            <td class="text-right">R$ {{ number_format($total_pedido, 2, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-danger btn-lg">
                                    Cancelar
                                </button>   
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
            @if($key < count($compras) - 1)
            <hr>
            @endif
        @empty
            <h5>
                @if ($cancelados->count() > 0)
                    Neste momento não há nenhuma compra válida.
                @else
                    Você ainda não fez nenhuma compra.
                @endif
            </h5>
        @endforelse
    </div>

    <div class="mt-5">
        <h3>Compras canceladas</h3>
        <div class="border rounded p-4">
        @forelse ($cancelados as $key => $pedido)
            <b> Pedido: {{ $pedido->id }} </b>
            <b class="ml-5"> Criado em: {{ $pedido->created_at->format('d/m/Y H:i') }} </b>
            <b class="ml-5"> Cancelado em: {{ $pedido->updated_at->format('d/m/Y H:i') }} </b>
            <table class="py-2 mt-2 align-items-center text-center" width="100%">
                <thead>
                    <tr>
                        <th></th>
                        <th>Produto</th>
                        <th class="text-right">Valor Unitário</td>
                    <tr>
                </thead>
                <tbody>
                    @php
                        $total_pedido = 0;
                    @endphp
                    @foreach ($pedido->pedido_produtos_itens as $pedido_produto)
                        @php
                            $total_produto = $pedido_produto->valor;
                            $total_pedido += $total_produto;
                        @endphp
                        <tr>
                            <td width="150px">
                                <img width="150px" height="100px" src="{{ $pedido_produto->produto->imagem }}">
                            </td>
                            <td>
                                <div class="pl-2 text-left">{{ $pedido_produto->produto->nome }}</div>
                            </td>
                            <td class="text-right" width="10%">
                                R$ {{ number_format($total_produto, 2, ',', '.') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td class="text-right"><strong>Total do pedido</strong></td>
                        <td class="text-right">R$ {{ number_format($total_pedido, 2, ',', '.') }}</td>
                    </tr>
                </tfoot>
            </table>
            @if($key < count($cancelados) - 1)
            <hr>
            @endif
        @empty
            <h5>Nenhuma compra ainda foi cancelada.</h5>
        @endforelse
        </div>
    </div>
</div>

@endsection