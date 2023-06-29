<head>
<title>Conta A Receber</title>
</head>
<div class="container-flui px-2">
    <div class="row my-2 justify-content-between nav-top">
        <div class="col-sm-6 col-md-6 nav-top1">
            <p>Inicio <i class="fa-solid fa-angle-right fs-6 fw-2"></i> Contas A Receber</p>
        </div>
        <div class="col-sm-6 col-md-6 bg-muted text-end nav-top2">
            <button class="btn btn-primary rounded-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-regular fa-add"></i> Renda</button>
            <button class="btn btn-primary rounded-0" data-bs-toggle="modal" data-bs-target="#staticBackdrops"><i class="fa-regular fa-add"></i> Trabalho</button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table " id="example">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Serviço</th>
                    <th>Valor</th>
                    <th>Data de Recebimento</th>
                    <th>Modalidade</th>
                    <th>Status</th>
                    <th>Açao</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($receber as $recebe): ?>
                <tr>
                    <td><?=$recebe->id?></td>
                    <td><?=$recebe->work?></td>
                    <td><?=number_format($recebe->Valor,2)?> MT</td>
                    <td><?=$recebe->Data_Recebimento?></td>
                    <td><?=$recebe->Modalidade?></td>
                    <td><?=$recebe->status==1 ? 'Activo' : 'No-Activo'?></td>
                    <td class="nav-top2">
                        <!-- <button class="btn btn-outline-primary"><i class="fa-solid fa-edit"></i></button>
                        <button class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button> -->
                        <button class="btn btn-primary rounded-0"><i class="fa-solid fa-info me-2"></i> DETALHES</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td>Total A Receber</td>
                    <td></td>
                    <td><?=number_format($total->Valor,2)?> MT</td>
                    <td colspan="4"></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
