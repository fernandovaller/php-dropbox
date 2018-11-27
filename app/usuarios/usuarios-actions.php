<?php
$acao = anti_injection($_REQUEST['acao']);
$id = anti_injection($_REQUEST['id']);

$nome  = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$token = filter_input(INPUT_POST, 'token', FILTER_DEFAULT);


$obj = new App\Usuario();

switch ($acao) {

    case 'inserir':
    $dados['nome'] = $nome;
    $dados['email'] = $email;    
    $dados['token_dropbox'] = $token;    

    if($obj->insert($dados)){        
        header("Location: " . URL . "?p=usuarios");
    }    
    break;

    case 'excluir':
    if($obj->delete($id)){
        header("Location: " . URL . "?p=usuarios");
    }
    break;

}