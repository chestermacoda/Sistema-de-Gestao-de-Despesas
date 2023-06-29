<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Novo Recebimento</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASE_URL ?>Action/RegistarRecebimento">
                <div class="modal-body">
                    <div class="row form-group pb-3 px-3">
                        <div class="resp"></div>
                    </div>
                    <div class="row from-group">
                        <div class="col-sm-12 col-md-12 mb-2">
                            <label for="" class="form-label">Trabalho</label>
                            <select name="trabalho" id="" class="form-control form-control-sm">
                                <option value="">Escolha o Trabalho</option>
                                <?php foreach($trabalhos as $trabalho): ?>
                                <option value="<?=$trabalho->id?>"><?=$trabalho->work?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12 col-md-12 mb-2">
                            <label for="" class="form-label">Valor</label>
                            <input type="text" name="valor" id="" class="form-control form-control-sm" placeholder="Digite o Valor" >
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12 col-md-12 mb-2">
                            <label for="" class="form-label">Data de Recebimento</label>
                            <input type="date" name="data" id="" class="form-control form-control-sm" placeholder="Digite o Montante">
                        </div>
                    </div>
                    
                    <!-- <div class="row form-group">
                        <div class="col-sm-12 col-md-12 mb-2">
                            <label for="" class="form-label">Meses</label>
                            <select name="meses" id="" class="form-control form-control-sm">
                                <option value="Janeiro">Janeiro</option>
                                <option value="Fevereito">Fevereito</option>
                                <option value="Março">Março</option>
                                <option value="Abril">Abril</option>
                                <option value="Maio">Maio</option>
                                <option value="Junho">Junho</option>
                                <option value="Julho">Julho</option>
                                <option value="Agosto">Agosto</option>
                                <option value="Setembro">Setembro</option>
                                <option value="Outubro">Outubro</option>
                                <option value="Novembro">Novembro</option>
                                <option value="Dezembro">Dezembro</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="row form-group">
                        <div class="col-sm-12 col-md-12 mb-2">
                            <label for="" class="form-label">Descriçao da Renda</label>
                             
                            <textarea name="descricao" id="" cols="3" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12 col-md-12 mb-2">
                            <label for="" class="form-label">Status</label>
                            <select name="status" id="" class="form-control form-control-sm">
                                <option value="1">Activo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group nav-top2 mt-2">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary rounded-0">Registar</button>
                            <button type="button" class="btn btn-secondary rounded-0" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                    <!-- <div class=" modal-footer justify-content-start nav-top2">

                    </div> -->
            </form>
        </div>
    </div>
</div>