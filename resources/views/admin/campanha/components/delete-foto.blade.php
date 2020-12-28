<div class="modal fade" id="deleteFoto-{{$foto->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteFoto-{{$foto->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Deletar foto</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('foto.destroy',$foto->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="cofrinho_id" value="{{$foto->area_id}}">
                    Você deseja deletar mesmo essa foto ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
      </div>
</div>
