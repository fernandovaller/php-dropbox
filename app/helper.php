<?php
//FUNÇÕES ESPECIFICAS DO APP

function usuario_logado($campo = 'nome')
{
    return isset($_SESSION["usuario_{$campo}"]) ? $_SESSION["usuario_{$campo}"] : false;
}