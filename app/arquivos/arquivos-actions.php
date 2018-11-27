<?php

$acao = anti_injection($_REQUEST['acao']);
$id   = anti_injection($_REQUEST['id']);

$token     = usuario_logado('token');
$descricao = filter_input(INPUT_POST, 'descricao',FILTER_DEFAULT);

$dropbox = new App\DropboxUpload(usuario_logado('token'));

$obj = new App\Arquivo();

switch ($acao) {
    
    case 'inserir':

    if (isset($_FILES["arquivo"])) {
        $file      = $_FILES['arquivo'];
        //$file_name = $dropbox->uploadFile($file, 'contratos');
        $file_name = $dropbox->uploadFile($file);
    }
    
    $dados['id_usuario'] = usuario_logado('id');
    $dados['descricao']  = $descricao;
    $dados['arquivo']    = $file_name;
    
    if($obj->insert($dados)){
        header("Location: " . URL . "?p=arquivos");
    }
    break;

    
    case 'baixar':
    $dados_arquivo = $obj->find($id);
    $arquivo = $dados_arquivo['arquivo'];
    $dropbox->downloadFile($arquivo);
    break;
    
    
    case 'excluir':

    //Pega o nome do arquivo
    $dados_arquivo = $obj->find($id);
    $arquivo = $dados_arquivo['arquivo'];

    //deleta o arquivo no dropbox
    $resp = $dropbox->deleteFile($arquivo);
    //var_dump($resp);

    if($obj->delete($id)){
        header("Location: " . URL . "?p=arquivos"); 
    }
    break;
    
}