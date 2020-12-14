@extends('layouts/app', ['activePage' => 'payments', 'activeButton' => '', 'title' => 'Pagamentos | OincBank'])

@section('content')
    <div class="content">
        <div class="row">

            <div class="col-4">
                <h3>Pagamentos</h3>
            </div>
            
            <div class="col-12">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>

                                            @if (auth()->user()->role == 1)
                                                <th>Usuário</th>    
                                            @endif
                                            <th>Cofrinho</th>
                                            <th>Tipo</th>

                                            <th>Valor</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pagamentos as $pagamento)
                                            <tr>
                                                <td>{{$pagamento->id}}</td>
                                                @if (auth()->user()->role == 1)
                                                    <td>{{$pagamento->user->name}}</td>
                                                @endif
                                                <td>{{$pagamento->campanha->titulo}}</td>
                                                <td>
                                                    @if ($pagamento->tipo == 1)
                                                        Doação
                                                    @elseif ($pagamento->tipo == 2)
                                                        Retirada
                                                    @endif
                                                </td>
                                                <td> R$ {{ number_format($pagamento->valor,2,",",".") }}</td>
                                                <td>
                                                    @if ($pagamento->status == 1)
                                                        Pendente
                                                    @elseif ($pagamento->status == 2)
                                                        Pago
                                                    @elseif ($pagamento->status == 3)
                                                        Pendente Pagamento - Mercado Pago
                                                    @elseif ($pagamento->status == 4)
                                                        Falha no pagamento
                                                    @endif
                                                </td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $('.table').DataTable({
        "language":{
            "url": '//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json'
        }
    });
});
</script>
@endsection
