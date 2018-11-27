<?php
$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);

$obj     = new App\Arquivo();
$dropbox = new App\DropboxUpload(usuario_logado('token'));

$dados_arquivo = $obj->find($id);
$arquivo       = $dados_arquivo['arquivo'];

$dados = $dropbox->infoFile($arquivo);

//var_dump($dados);
?>


<table class="table table-bordered table-hover">
    <thead>
        <tr class="active">
            <th colspan="2">Informações do arquivo no Dropbox</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Id</td>
            <td><?=$dados->getId()?></td>
        </tr>
        <tr>
            <td>Nome</td>
            <td><?=$dados->getName()?></td>
        </tr>
        <tr>
            <td>Tamanho</td>
            <td><?=$dados->getSize()?></td>
        </tr>
        <tr>
            <td>Compartilhado</td>
            <td><?=$dados->getSharinginfo()?></td>
        </tr>
        <tr>
            <td>Modificado no Cliente</td>
            <td><?=$dados->getClientmodified()?></td>
        </tr>
        <tr>
            <td>Modificado no Servidor</td>
            <td><?=$dados->getServermodified()?></td>
        </tr>
        <tr>
            <td>Nome</td>
            <td><?=$dados->getName()?></td>
        </tr>
        <tr>
            <td>Revisão</td>
            <td><?=$dados->getRev()?></td>
        </tr>
    </tbody>
</table>
