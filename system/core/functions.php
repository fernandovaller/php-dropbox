<?php
//FUNCTIONS PARA CORE DO SISTEMA
//NAO CRIAR FUNÇÕES DO APP AQUI, CRIAR EM HELPER

//remove palavras que podem permitir o sql injection
function anti_injection($sql){
  $sql = preg_replace(sql_regcase("/(http|www|wget|from|select|insert|delete|where|.dat|.txt|.gif|drop table|show tables| or |#|\*|--|\\\\)/"),"",$sql);
  $sql = trim($sql);
  $sql = strip_tags($sql);
  $sql = addslashes($sql);
  return $sql;
}

//monta o caminho do arquivo passado
function assets($files_path, $version = false){
  $v = $version ? "?v=" . filemtime($files_path) :'';
  return URL . "/{$files_path}{$v}";
}

function redirect($url) {
    if (!headers_sent()) {
        header('Location: '.$url);        
    } else {
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>';
    }
    exit();
}

function moeda_mysql($valor) {  
  if(empty($valor)) 
    return '0';
  $valor = str_replace(".", "", trim($valor)); //remove "."
  $valor = str_replace(",", ".", $valor); //remove ","  
  return $valor;
}

function moeda($valor, $prefix = '', $sufix = '') {
  if(empty($valor)) return '';
  $valor = str_replace(",", "", $valor);
  $valor = number_format($valor, 2, ',', '.');
  return $prefix . $valor . $sufix;  
}

function data_mysql($data_dma){
  if(!$data_dma)
    return '0000-00-00';
  $data_array = split("/",$data_dma);
  $data = $data_array[2] ."-".$data_array[1]."-".$data_array[0];
  return $data;
}

function data($valor){  
  if($valor == '0000-00-00')
    return '-';
  
  if($valor){
    $data = date("d/m/Y", strtotime($valor));    
    return $data;
  }
}

function data_hora($valor){
  if($valor == '0000-00-00 00:00:00')
    return '-';

  if($valor){
    $data = date("d/m/Y G:i:s", strtotime($valor));    
    return $data;
  }
}

function componente($componente, $data = ''){
  $cp = APP_PATH . '_componentes/'. $componente . '.phtml';
  if(file_exists($cp)){
    return include $cp;
  }
}