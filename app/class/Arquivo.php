<?php

namespace App;

use System\Model;

class Arquivo extends Model
{
    protected $table = 'arquivos';
    protected $id_usuario;

    public function __construct()
    {
        parent::__construct();
        $this->id_usuario = usuario_logado('id');
    }

    public function findAll($order = 'id DESC', $limit = ''){
        $sql = "SELECT * FROM $this->table 
        WHERE id_usuario = :id_usuario
        ORDER BY {$order} {$limit}";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':id_usuario', $this->id_usuario);
        $stmt->execute();
        if($stmt->rowCount() > 0){
          return $stmt->fetchAll(\PDO::FETCH_ASSOC);
      } else { return false; }
    } 

    public function verificarToken()
    {
        $token = usuario_logado('token');
        if(!$token){
            
        }
    }

}
