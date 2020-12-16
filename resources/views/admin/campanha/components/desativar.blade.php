<div class="modal fade" id="desativar{{$campanha->id}}" tabindex="-1" role="dialog" aria-labelledby="desativar{{$campanha->id}}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Desativar Cofrinho</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('campanha.desativar', $campanha->id) }}"
                    method="POST">
                    @csrf
                    @method('put')

                    <div class="row">

                        <div class="col-12">
                            <div class="form-group text-left">
                                <label for="motivo_deletado">Digite o Motivo do Desativamento</label>
                                <textarea rows="6" name="motivo_deletado"
                                    id="motivo_deletado"
                                    class="form-control form-control-textarea"
                                    placeholder="Digite o Motivo do Desativamento"></textarea>
                            </div>
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-danger">Desativar</button>
                </form>
            </div>
        </div>
    </div>
</div>
