<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sacar valor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('pagamentos.saque.atualizar', $pagamento->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="valor">Valor</label>
                                <input readonly type="text" class="form-control dinheiro" id="valor" name=""
                                    placeholder="Valor" value="{{ $pagamento->valor }}">
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="">CPF/CNPJ</label>
                                <input readonly type="text" class="form-control documento" id="documento" name=""
                                    placeholder="CPF/CNPJ" value="{{ $pagamento->documento }}">
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="">Banco</label>
                                <input readonly type="text" class="form-control agencia" id="banco" name=""
                                    placeholder="Banco"
                                    value="{{ $pagamento->banco->numero . ' - ' . $pagamento->banco->nome }}">
                            </div>
                        </div>

                        <div class="col-12 col-lg-2">
                            <div class="form-group">
                                <label for="">Agência</label>
                                <input readonly type="text" class="form-control agencia" id="agencia" name=""
                                    placeholder="Agência" value="{{ $pagamento->agencia }}">
                            </div>
                        </div>

                        <div class="col-12 col-lg-3">
                            <div class="form-group">
                                <label for="conta_corrente">Conta Corrente</label>
                                <input readonly type="text" class="form-control conta" id="conta_corrente" name=""
                                    placeholder="Conta Corrente" value="{{ $pagamento->conta_corrente }}">
                            </div>
                        </div>

                        <div class="col-12 col-lg-3">
                            <div class="form-group">
                                <label for="">Data Pagamento</label>
                                <input type="date" class="form-control" id="data_pagamento" name="data_pagamento"
                                    value="{{ $pagamento->data_pagamento == null ? '' : $pagamento->data_pagamento->format('Y-m-d') }}">
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value='1'>Pendente</option>
                                    <option value='2'>Pago</option>
                                    <option value="4">Negado</option>
                                </select>
                            </div>
                        </div>

                        <div id="otherType" style="display:none;" class="col-12">
                            <label for="specify">Motivo Negado</label>
                            {{-- <input type="textbox" name="motivo_negado" placeholder="EX:Agência inválida." /> --}}
                            <textarea class="form-control"  name="motivo_negado" rows="4" cols="50" placeholder="EX:Agência inválida."> </textarea>
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



