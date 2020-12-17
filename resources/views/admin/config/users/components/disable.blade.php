<div class="modal fade" id="desativar_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="desativar_{{$user->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Desativar usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form method="POST" action="{{route('usuario.desativar',$user->id)}}">
            @csrf
            @method('put')
        <div class="modal-body">
            Tem certeza que deseja <strong>desativar</strong> o usuário {{$user->name}}?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-warning">Desativar</button>
            </form>
        </div>
    </div>
    </div>
</div>