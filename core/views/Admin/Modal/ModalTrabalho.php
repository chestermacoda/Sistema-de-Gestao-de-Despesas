<!-- Modal -->
<div class="modal fade" id="staticBackdrops" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Novo Trabalho</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASE_URL ?>Action/RegistarTrabalho">
                <div class="modal-body">
                    <div class="row form-group pb-3 px-3">
                        <div class="resp"></div>
                    </div>
                    <div class="row from-group">
                        <div class="col-sm-12 col-md-12 mb-2">
                            <label for="" class="form-label">Trabalho</label>
                            <input type="text" name="trabalho" id="" class="form-control form-control-sm" placeholder="Digite o nome da remuneracao">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12 col-md-12 mb-2">
                            <label for="" class="form-label">Modalidade</label>
                            <select name="modalidade" id="" class="form-control form-control-sm">
                                <option value="">Escolher Modalidade</option>
                                <option value="permanente">Permanente</option>
                                <option value="temporario">Temporario</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12 col-md-12 mb-2">
                            <label for="" class="form-label">Descriçao</label>
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