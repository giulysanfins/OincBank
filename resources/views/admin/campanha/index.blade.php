@extends('layouts/app', ['activePage' => '','activeButton' => '','title' => 'Cofrinhos | OincBank'])

@section('content')
    <div class="content">
        <div class="row">

            @if (auth()->user()->role == 1)
                <div class="col-3">
                    <div class="card card-stats">
                        <div class="card-header">
                            Cofrinhos Expirados
                        </div>
                        <div class="card-body text-center">
                            <h2>
                                {{$campanhas_expiradas->count()}}<br />
                                <small>Cofrinhos</small>
                            </h2>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card card-stats">
                        <div class="card-header">
                            Cofrinhos Ativos
                        </div>
                        <div class="card-body text-center">
                            <h2>
                                {{$campanhas_aprovadas->count()}}<br />
                                <small>Cofrinhos</small>
                            </h2>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card card-stats">
                        <div class="card-header">
                            Cofrinhos Desativados
                        </div>
                        <div class="card-body text-center">
                            <h2>
                                {{$campanhas_desativadas->count()}}<br />
                                <small>Cofrinhos</small>
                            </h2>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card card-stats">
                        <div class="card-header">
                            Cofrinhos Exluídos
                        </div>
                        <div class="card-body text-center">
                            <h2>
                                {{$campanhas_excluidas->count()}}<br />
                                <small>Cofrinhos</small>
                            </h2>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            @endif

            <div class="col-12">
                <h3>Cofrinhos</h3>
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="col-12 text-right">
                                    @if (auth()->user()->role == 2)
                                        <a href="{{route('campanha.store')}}" class="btn btn-primary">Adicionar Cofrinho</a>
                                        <a href="{{route('campanha.apagar_adm')}}" class="btn btn-danger">Deletar Cofrinho</a>
                                    @endif
                                </div>
                                {{-- comeco tabelas ativas --}}

                                <div class="accordion" id="acoordion_campanhas">

                                    <div class="card">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="card-header" id="expirados">
                                                <h5 class="mb-0 text-left">
                                                    Cofrinhos Expirados
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
                                                                <th scope="col">Dono</th>
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
                                                                        {{$campanha->user->name}}
                                                                    </td>
                                                                    <td>
                                                                        <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">
                                                                            @if (auth()->user()->role == 2)
                                                                            <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                            @endif
                                                                            <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-secondary">Visualizar</a>
                                                                            @if (auth()->user()->role == 2)
                                                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sacar{{$campanha->id}}">Sacar valor</button>
                                                                            @endif
                                                                            {{-- <button type="button" class="btn btn-danger">Deletar</button> --}}
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @if (auth()->user()->role == 2)
                                                                @component('admin.campanha.components.solicitar',[
                                                                    'campanha' => $campanha
                                                                ])@endcomponent
                                                                @endif

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
                                                    Cofrinhos Ativos
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
                                                            <th scope="col">Dono</th>
                                                            <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($campanhas_aprovadas as $campanha)
                                                            @php
                                                                $total = 0;

                                                                foreach($campanha->payments as $pag)
                                                                {
                                                                    if($pag->tipo == 1 && $pag->status == 2){
                                                                         $total = $total + $pag->valor;
                                                                    }
                                                                }

                                                            @endphp
                                                            <tr>
                                                                <th scope="row">{{$campanha->id}}</th>
                                                                <td>{{$campanha->titulo}}</td>
                                                                <td>{{$campanha->categoria->name}}</td>
                                                                <td><b>R$ {{number_format($total,2,",",".")}}</b> / R$ {{number_format($campanha->valor,2,",",".")}}</td>

                                                                <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                                <td>
                                                                    {{$campanha->user->name}}
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">

                                                                            @if (auth()->user()->role == 2)
                                                                                  <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                            @endif
                                                                                 <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-secondary">Visualizar</a>
                                                                            @if (auth()->user()->role == 2)
                                                                                 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sacar{{$campanha->id}}">Sacar valor</button>
                                                                            @endif
                                                                                {{-- <a href="{{route('campanha.desativar',$campanha->id)}}" onclick="validate()" class="btn btn-danger">Desativar</a> --}}
                                                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                                                data-target="#editDelete{{ $campanha->id }}">Desativar</button>


                                                                        <div class="modal fade" id="editDelete{{ $campanha->id }}" tabindex="-1"
                                                                            role="dialog" aria-labelledby="editDelete{{ $campanha->id }}"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title" id="exampleModalLabel">Deletar Cofrinho</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                                            aria-label="Fechar">
                                                                                            <span aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="{{ route('campanha.desativar', $campanha->id) }}">
                                                                                            @csrf


                                                                                            <div class="row">

                                                                                                <div class="col-12">
                                                                                                    <div class="form-group text-left">
                                                                                                        <label for="motivo_deletado">Digite o Motivo da
                                                                                                            Deleção</label>
                                                                                                        <textarea rows="6" name="motivo_deletado"
                                                                                                            id="motivo_deletado"
                                                                                                            class="form-control form-control-textarea"
                                                                                                            placeholder="Digite o motivo de deleção"></textarea>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary"
                                                                                            data-dismiss="modal">Fechar</button>
                                                                                        <button type="submit" class="btn btn-danger">Deletar</button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            @if (auth()->user()->role == 2)
                                                            @component('admin.campanha.components.solicitar',[
                                                                'campanha' => $campanha,
                                                                'bancos' => $bancos
                                                            ])@endcomponent
                                                            @else
                                                            @component('admin.campanha.components.desativar',[
                                                                'campanha' => $campanha
                                                            ])@endcomponent
                                                            @endif
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
                                                    Cofrinhos Desativados
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
                                                                <th scope="col">Dono</th>
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
                                                                        {{$campanha->user->name}}
                                                                    </td>
                                                                    <td>

                                                                        <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">
                                                                            @if (auth()->user()->role == 2)
                                                                            <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                            @endif
                                                                            <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-secondary">Visualizar</a>
                                                                            @if (auth()->user()->role == 2)
                                                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sacar{{$campanha->id}}">Sacar valor</button>
                                                                            @endif
                                                                            <a href="{{route('campanha.ativar',$campanha->id)}}" class="btn btn-primary">Ativar</a>


                                                                        </div>
                                                                        <a href="#{{$campanha->id}}" class="edit" data-toggle="modal"><i class="fas fa-question" style="color: black"></i></a>
                                                                        <div id="{{$campanha->id}}" class="modal fade">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">

                                                                                        <div class="modal-header">
                                                                                            <h4 class="modal-title">Motivo Desativado</h4>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <p>
                                                                                                @if($campanha->motivo_deletado)
                                                                                                {{$campanha->motivo_deletado}}
                                                                                                @else
                                                                                                Motivo: não informado.
                                                                                                @endif

                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <input type="button" class="btn btn-danger" data-dismiss="modal" value="Sair">
                                                                                        </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @if (auth()->user()->role == 2)
                                                                @component('admin.campanha.components.solicitar',[
                                                                    'campanha' => $campanha,
                                                                    'bancos' => $bancos
                                                                ])@endcomponent
                                                                @endif
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <p class="text-center"> Sem resultados </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    @if (auth()->user()->role == 1)
                                        <div class="card">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#excluidas" aria-expanded="false" aria-controls="header_desativadas">
                                                <div class="card-header" id="header_desativadas">
                                                    <h5 class="mb-0 text-left">
                                                        Cofrinhos Excluidos
                                                    </h5>
                                                </div>
                                            </button>

                                            <div id="excluidas" class="collapse" aria-labelledby="body_excluidas" data-parent="#excluidas">
                                                <div class="card-body">
                                                    @if($campanhas_excluidas->count() > 0)
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Titulo</th>
                                                                    <th scope="col">Categoria</th>
                                                                    <th scope="col">Data Criacao</th>
                                                                    <th scope="col">Dono</th>
                                                                    <th scope="col"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($campanhas_excluidas as $campanha)
                                                                    <tr>
                                                                        <th scope="row">{{$campanha->id}}</th>
                                                                        <td>{{$campanha->titulo}}</td>
                                                                        <td>{{$campanha->categoria->name}}</td>
                                                                        <td>{{$campanha->created_at->format('d/m/Y h:i:s')}}</td>
                                                                        <td>
                                                                            {{$campanha->user->name}}
                                                                        </td>
                                                                        <td>
                                                                            <div class="btn-group float-right" role="group" aria-label="Botões de Ação - Clientes">
                                                                                @if (auth()->user()->role == 2)
                                                                                <a href="{{route('campanha.edit',$campanha->id)}}" class="btn btn-info">Editar</a>
                                                                                @endif
                                                                                <a href="{{route('campanha.show',$campanha->id)}}" class="btn btn-secondary">Visualizar</a>
                                                                                @if (auth()->user()->role == 2)
                                                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#sacar{{$campanha->id}}">Sacar valor</button>
                                                                                <button type="submit" class="btn btn-success">Ativar</button>
                                                                                @endif
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    @if (auth()->user()->role == 2)
                                                                        @component('admin.campanha.components.solicitar',[
                                                                            'campanha' => $campanha
                                                                        ])@endcomponent
                                                                    @endif
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    @else
                                                        <p class="text-center"> Sem resultados </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif


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
        title: "Tem certeza que você deseja desabilitar esse Cofrinho?",
        text: "Não será possível recuperá-lo!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sim, apague-o!",
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


});

$(function(){
  $('#cpf').mask('999.999.999-99');
  $('#cnpj').mask('99.999.999/9999-99');

  $('#myInput').keyup(function(){
    const val = $(this).val().replace(/[^0-9]/g, '');
    if (val.length <= 11) {
      $('#cpf').val(val);
      $(this).val($('#cpf').masked());
      $('#documento').text('CPF');
    } else {
      $('#cnpj').val(val);
      $(this).val($('#cnpj').masked());
      $('#documento').text('CNPJ');
    }
  });
});

</script>
@endsection
