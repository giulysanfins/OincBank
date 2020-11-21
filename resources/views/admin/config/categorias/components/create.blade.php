<div class="modal fade" id="createCategoria" tabindex="-1" role="dialog" aria-labelledby="createCategoria" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('categorias.store')}}" method="POST">
            @csrf
            @method('post')

            <div class="row">

                <div class="col-12">
                    <div class="form-group text-left">
                        <label for="name">Nome da Categoria*</label>
                        <input required type="text" class="form-control" id="name" name="name" placeholder="Nome da Categoria" value="{{old('name')}}">
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