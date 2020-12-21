<div class="modal fade" id="editParam{{$parametro->id}}" tabindex="-1" role="dialog" aria-labelledby="editParam{{$parametro->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Alterar Parametro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('parametros.update',$parametro->id)}}" method="POST">
                    @csrf
                    @method('put')
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="form-group">
                            <label for="valor">Parametro</label>
                            <input readonly type="input" class="form-control" value="{{$parametro->nome}}">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        @if (in_array($parametro->slug,['campanhas.num']))
                            <div class="form-group">
                                <label for="valor">Valor</label>
                                <input type="number" step='1' min='0' class="form-control" id="valor" name="valor" value="{{$parametro->valor}}">
                            </div>
                        @elseif (in_array($parametro->slug,['campanhas.min']))
                        <label for="valor">Valor Mínimo</label>
                        <input type="number" step='1' min='0' class="form-control" id="valor" name="valor" value="{{$parametro->valor}}">
                        @elseif (in_array($parametro->slug,['campanhas.max']))
                        <label for="valor">Valor Máximo</label>
                        <input type="number" step='1' min='0' class="form-control" id="valor" name="valor" value="{{$parametro->valor}}">
                        @endif

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
