<?php

namespace App;

use System\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    public function login($email, $senha)
    {
        $sql = "SELECT * FROM $this->table WHERE email = :email";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return  $stmt->fetch(\PDO::FETCH_ASSOC);       
      } else { return false; }
    }

}
