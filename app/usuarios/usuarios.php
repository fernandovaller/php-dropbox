<div class="row">
    <div class="col-sm-6"><h1>Usuários</h1></div>
    <div class="col-sm-6 text-right">
        <a href="?p=usuarios-form-cad" class="btn btn-primary">Cadastrar</a>
    </div>
</div>

<hr>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Token</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
    <?php 
    $dados = (new App\Usuario)->findAll();    
    if($dados) foreach ($dados as $key => $row) {
    ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['token_dropbox'] ?></td>
            <td>
                <a href="pages/usuarios-actions?acao=excluir&id=<?=$row['id']?>" title="Remover" class="btn btn-danger btn-sm"><i class="fa fa-close"></i></a>
            </td>
        </tr>
    <?php } ?>
    </tbody>

</table>