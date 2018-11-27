<?php

$dropbox = new App\DropboxUpload();

if (isset($_GET['code']) && isset($_GET['state'])) {
        
    $code  = $_GET['code'];
    $state = $_GET['state'];
    
    $token = $dropbox->getTokenLogin($code, $state);

    if($token){
        $id = usuario_logado('id');
        $data['token_dropbox'] = $token;

        $obj = new App\Usuario();
        $obj->update($data, $id);

        //Registra na sessão
        $_SESSION['usuario_token'] = $token;

        echo System\Util::bootAlert('Sistema conectado com sucesso! Você já pode fazer o cadastro de arquivos.');

        echo '<a href="?p=arquivos-form-cad" class="btn btn-primary">Cadastrar Arquivos</a>';

    } else {
        echo System\Util::bootAlert('Erro ao obter o código de autorização! tente novamente.', 'danger');
    }

}