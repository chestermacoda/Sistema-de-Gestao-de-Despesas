<div class="container-flui px-2">
    <div class="row my-2 justify-content-between nav-top">
        <div class="col-sm-6 col-md-6 nav-top1">
            <p>Inicio <i class="fa-solid fa-angle-right fs-6 fw-2"></i> Conta A Pagar</p>
        </div>
        <div class="col-sm-6 col-md-6 bg-muted text-end nav-top2">
            <button class="btn btn-primary rounded-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-regular fa-add"></i> Despesa</button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table" id="example">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Categoria</th>
                    <th>Açao</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>3</td>
                    <td>Açao</td>
                    <td>
                        <button class="btn"><i class="fa-solid fa-edit"></i></button>
                        <button class="btn"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Nova Categoria</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASE_URL ?>Secretaria/RegistarFuncionario">
                <div class="modal-body">
                    <div class="row form-group pb-3 px-3">
                        <div class="resp"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12 col-md-12 mb-2">
                            <label for="" class="form-label">Nome</label>
                            <input type="text" name="nome" id="" class="form-control form-control-sm" placeholder="Digite o nome">
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