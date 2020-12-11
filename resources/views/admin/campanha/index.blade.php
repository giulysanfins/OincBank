@extends('layouts/app', ['activePage' => '','activeButton' => '','title' => 'Campanhas | OincBank'])

@section('content')
    <div class="content">
        <div class="row">

            <div class="col-12">
                <h3>Campanhas</h3>
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="col-12 text-right">
                                    @if (auth()->user()->role == 2)
                                        <a href="{{route('campanha.store')}}" class="btn btn-primary">Adicionar campanha</a>
                                        <a href="{{route('campanha.apagar_adm')}}" class="btn btn-primary">Deletar campanha</a>
                                    @endif
                                </div>
                                {{-- comeco tabelas ativas --}}

                                <div class="accordion" id="acoordion_campanhas">
                                {{--
                                    <div class="card">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#pendentes" aria-expanded="true" aria-controls="collapseOne">
                                            <div class="card-header" id="headerPendentes">
                                                <h5 class="mb-0 text-left">
                                                    Campanhas Pendentes
                                                </h5>
                                            </div>
                                        </button>

                                        <div id="pendentes" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                @if($campanhas_pendentes->count() >0)

                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Titulo</th>
                                                                <th scope="col">Categoria</th>
                                                                <th scope="col">Data Criacao</th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($campanhas_pendentes as $campanha)
                                                                <tr>
                                                                    <th scope="row">{{$campanha->id}}</th>
                                                                    <td>{{$campanha->titulo}}</td>
                                                                    <td>{{$campanha->categoria->name}}</td>
                                                                    <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                                    <td>
                                                                        <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">

                                                                            <form action="{{ route('campanha.desativar', $campanha->id) }}" method="POST">
                                                                                @csrf
                                                                                @method('put')
                                                                                 <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                                <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-secondary">Visualizar</a>
                                                                                <button type="submit" class="btn btn-danger">Desativar</button>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <p class="text-center"> Sem resultados </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div> 
                                --}}

                                    <div class="card">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="card-header" id="expirados">
                                                <h5 class="mb-0 text-left">
                                                    Campanhas Expiradas
                                                </h5>
                                            </div>
                                        </button>

                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                @if($campanhas_expiradas->count() >0)

                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Titulo</th>
                                                                <th scope="col">Categoria</th>
                                                                <th scope="col">Valores</th>
                                                                <th scope="col">Data Criacao</th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($campanhas_expiradas as $campanha)
                                                                <tr>
                                                                    <th scope="row">{{$campanha->id}}</th>
                                                                    <td>{{$campanha->titulo}}</td>
                                                                    <td>{{$campanha->categoria->name}}</td>
                                                                    <td>

                                                                    </td>
                                                                    <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                                    <td>
                                                                        <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">
                                                                            <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                            <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-secondary">Visualizar</a>
                                                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sacar{{$campanha->id}}">Sacar valor</button>
                                                                            <button type="button" class="btn btn-danger">Deletar</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                @component('admin.campanha.components.solicitar',[
                                                                    'campanha' => $campanha
                                                                ])@endcomponent
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <p class="text-center"> Sem resultados </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ativos" aria-expanded="false" aria-controls="collapseThree">
                                            <div class="card-header" id="header_ativos">
                                                <h5 class="mb-0 text-left">
                                                    Campanhas Ativas
                                                </h5>
                                            </div>
                                        </button>

                                        <div id="ativos" class="collapse" aria-labelledby="headingThree" data-parent="#ativos">
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Titulo</th>
                                                            <th scope="col">Categoria</th>
                                                            <th scope="col">Arrecadação</th>
                                                            <th scope="col">Data Criacao</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($campanhas_aprovadas as $campanha)
                                                            @php
                                                                $total = 0;
                                                                foreach($campanha->payments as $pag)
                                                                {
                                                                    $total = $total + $pag->valor;
                                                                }

                                                            @endphp
                                                            <tr>
                                                                <th scope="row">{{$campanha->id}}</th>
                                                                <td>{{$campanha->titulo}}</td>
                                                                <td>{{$campanha->categoria->name}}</td>
                                                                <td><b>R$ {{number_format($total,2,",",".")}}</b> / R$ {{number_format($campanha->valor,2,",",".")}}</td>

                                                                <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                                <td>
                                                                    <div class="btn-group float-right" role="group" aria-labe   l="Botões de Ação - Clientes">
                                                                        <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                        <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-secondary">Visualizar</a>
                                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sacar{{$campanha->id}}">Sacar valor</button>
                                                                        <button type="submit" class="btn btn-danger button">Deletar</button>
                                                                    </div>
                                                                </td>
                                                            </tr>

                                                            @component('admin.campanha.components.solicitar',[
                                                                'campanha' => $campanha,
                                                                'bancos' => $bancos
                                                            ])@endcomponent
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#desativadas" aria-expanded="false" aria-controls="header_desativadas">
                                            <div class="card-header" id="header_desativadas">
                                                <h5 class="mb-0 text-left">
                                                    Campanhas Desativadas
                                                </h5>
                                            </div>
                                        </button>

                                        <div id="desativadas" class="collapse" aria-labelledby="body_desativadas" data-parent="#desativadas">
                                            <div class="card-body">
                                                @if($campanhas_desativadas->count() >0)
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Titulo</th>
                                                                <th scope="col">Categoria</th>
                                                                <th scope="col">Data Criacao</th>
                                                                <th scope="col"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($campanhas_desativadas as $campanha)
                                                                <tr>
                                                                    <th scope="row">{{$campanha->id}}</th>
                                                                    <td>{{$campanha->titulo}}</td>
                                                                    <td>{{$campanha->categoria->name}}</td>
                                                                    <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                                    <td>
                                                                        <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">
                                                                            <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                            <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-secondary">Visualizar</a>
                                                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sacar{{$campanha->id}}">Sacar valor</button>
                                                                            <button type="submit" class="btn btn-success">Ativar</button>
                                                                        </div>
                                                                    </td>
                                                                </tr>

                                                                @component('admin.campanha.components.solicitar',[
                                                                    'campanha' => $campanha
                                                                ])@endcomponent
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <p class="text-center"> Sem resultados </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
  <script>

    function validate() {
      event.preventDefault(); // prevent form submit
      var form = document.forms["my-form"]; // storing the form
      swal({
        title: "Tem certeza que você deseja desabilitar essa campanha?",
        text: "Não será possível recuperá-la!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sim, apague-a!",
        cancelButtonText: "Cancelar",
        closeOnConfirm: false
           })
          .then((willDelete) => {
               if (willDelete) {
                     form.submit();
               } else {
                      swal("Cancelou");
           }
        });
    }
    </script>

<script>
    $(".agencia").mask("0000");
    $(".conta").mask("#0-0",{reverse:true});
    $('.dinheiro').mask("#.##0,00", {reverse: true});

$("#documento").keydown(function(){
    try {
        $(".documento").unmask();
    } catch (e) {}

    var tamanho = $(".documento").val().length;

    if(tamanho < 11){
        $(".documento").mask("999.999.999-99");
    } else {
        $(".documento").mask("99.999.999/9999-99");
    }

    // ajustando foco
    var elem = this;
    setTimeout(function(){
        // mudo a posição do seletor
        elem.selectionStart = elem.selectionEnd = 10000;
    }, 0);
    // reaplico o valor para mudar o foco
    var currentValue = $(this).val();
    $(this).val('');
    $(this).val(currentValue);
});
</script>
@endsection
