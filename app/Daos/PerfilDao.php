<?php

namespace App\Daos;

class PerfilDao {
   private $connection;
   public function __construct($pconnection) {
      $this->connection = $pconnection;
   }
   public function create(){;}
   public function read($id) {
      $query = "SELECT nombre, apellido, usuario " .
         "FROM perfil " .
         "WHERE id = ? ";
      $stmt = $this->connection->prepare($query);
      $stmt->execute(array($id));
      $perfil = $stmt->fetch();
      if ($perfil === false)
         return null;
      return $perfil;
   }
   public function update(){;}
   public function delete(){;}
}