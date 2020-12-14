@extends('layouts/app', ['activePage' => '',
'activeButton' => '',
'title' => 'Deleção de Cofrinhos'])

@section('content')
    <div class="content">
        <div class="row">

            <div class="col-12">
                <div class="card card-stats">
                    <div class="card">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#ativos"
                            aria-expanded="false" aria-controls="collapseThree">
                            <div class="card-header" id="header_ativos">
                                <h5 class="mb-0 text-left">
                                    Cofrinhos Ativos
                                </h5>
                            </div>
                        </button>


                        <div class="card-body">
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
                                    @foreach ($campanhas_aprovadas as $campanha)
                                        <tr>
                                            <th scope="row">{{ $campanha->id }}</th>
                                            <td>{{ $campanha->titulo }}</td>
                                            <td>{{ $campanha->categoria->name }}</td>
                                            <td>{{ $campanha->created_at->format('d/m/Y h:i:s') }}</td>
                                            <td>
                                                <div class="btn-group float-right" role="group" aria-labe
                                                    l="Botões de Ação - Clientes">

                                                    <form action="{{ route('campanha.apagar_adm', $campanha->id) }}"
                                                        method="POST" id="my-form" onsubmit="validate(event)">
                                                        @csrf
                                                        @method('put')
                                                        <a href="{{ route('campanha.edit', $campanha->id) }}"
                                                            class="btn btn-info">Editar</a>
                                                        <a href="{{ route('campanha.show', $campanha->id) }}"
                                                            class="btn btn-secondary">Visualizar</a>
                                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                                            data-target="#editDelete{{ $campanha->id }}">Deletar</button>
                                                        {{-- <button type="submit"
                                                            class="btn btn-danger button">Deletar</button>
                                                        --}}
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
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
                                                        <form action="{{ route('campanha.destroy', $campanha->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('put')

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
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>



                </div>
            </div>
        </div>


    @endsection


    @section('scripts')

    @endsection
