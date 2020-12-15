<div class="modal fade" id="editCategoria{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="editCategoria{{$categoria->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('categorias.update',$categoria->id)}}" method="POST">
            @csrf
            @method('put')

            <div class="row">

                <div class="col-12">
                    <div class="form-group text-left">
                        <label for="name">Nome da Categoria*</label>
                        <input required type="text" class="form-control" id="name" name="name" placeholder="Nome da Categoria" value="{{old('name',$categoria->name)}}">
                    </div>
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