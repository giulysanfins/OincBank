<div class="modal fade" id="deletar_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="deletar_{{$user->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form method="POST" action="{{route('usuario.destroy',$user->id)}}">
            @csrf
            @method('delete')
        <div class="modal-body">
            Tem certeza que deseja <strong>deletar</strong> o usuário <strong>{{$user->name}}</strong>?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary">Deletar</button>
            </form>
        </div>
    </div>
    </div>
</div>