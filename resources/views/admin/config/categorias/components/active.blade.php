<div class="modal fade" id="ativarCategoria{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="ativarCategoria{{$categoria->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ativar Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('categorias.active',$categoria->id)}}" method="POST">
            @csrf
            @method('put')
        <div class="modal-body">
            Você deseja ativar a categoria: {{$categoria->name}} ?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
      </div>
    </div>
</div>