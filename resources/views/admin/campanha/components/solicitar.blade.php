<div class="modal fade" id="sacar{{$campanha->id}}" tabindex="-1" role="dialog" aria-labelledby="sacar{{$campanha->id}}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sacar valor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('pagamentos.saque',$campanha->id)}}" method="POST">
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="valor">Valor</label>
                                <input type="text" class="form-control dinheiro" id="valor" name="valor" placeholder="Valor">
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="">CPF/CNPJ</label>
                                <input type="text" class="form-control documento" id="documento" name="documento" placeholder="CPF/CNPJ">
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="">Banco</label>
                                <select class="form-control" id="bank_id" name="bank_id">
                                    @foreach ($bancos as $banco)
                                        <option value="{{$banco->id}}">{{$banco->numero}} - {{$banco->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="">Agência</label>
                                <input type="text" class="form-control agencia" id="agencia" name="agencia" placeholder="Agência">
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="">Conta Corrente</label>
                                <input type="text" class="form-control conta" id="conta_corrente" name="conta_corrente" placeholder="Conta Corrente">
                            </div>
                        </div>

                    </div>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar mudanças</button>
            </form>
            </div>
        </div>
    </div>
</div>