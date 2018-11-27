<div class="row">
    <div class="col-sm-6"><h1>Arquivos</h1></div>
    <div class="col-sm-6 text-right">
        <a href="?p=arquivos-form-cad" class="btn btn-primary">Cadastrar</a>
    </div>
</div>

<hr>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descricao</th>
            <th>Arquivo</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
    <?php 
    $dados = (new App\Arquivo)->findAll();
    if($dados) foreach ($dados as $key => $row) {
    ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['descricao'] ?></td>
            <td><?= $row['arquivo'] ?></td>
            <td>
                <a href="#modal-info" data-id="<?=$row['id']?>" data-toggle="modal" title="Info" class="btn btn-info btn-sm bnt-info"><i class="fa fa-info-circle"></i></a>
                <a href="pages/arquivos-actions?acao=baixar&id=<?=$row['id']?>" title="baixar" class="btn btn-primary btn-sm"><i class="fa fa-download"></i></a>
                <a href="pages/arquivos-actions?acao=excluir&id=<?=$row['id']?>" title="Remover" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></a>
            </td>
        </tr>
    <?php } ?>
    </tbody>

</table>


<div class="modal fade" id="modal-info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Informações do Arquivo</h4>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
