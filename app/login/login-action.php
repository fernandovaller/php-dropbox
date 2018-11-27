<?php
//Recebe os dados
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

$obj = new App\Usuario();

$usuario = $obj->login($email, $senha);

if($usuario){
    //Registra os dados na sessao
    $_SESSION['usuario_id']  = $usuario['id'];
    $_SESSION['usuario_nome']  = $usuario['nome'];
    $_SESSION['usuario_email'] = $usuario['email'];
    $_SESSION['usuario_token'] = $usuario['token_dropbox'];
    //var_dump($_SESSION['usuario_nome']);
}

//Redireciona para index
header("Location: " . URL);