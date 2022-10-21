<?php

  class Conexion{

    private $conec;

    function __construct(){

      $conecString = "mysql:hos=t".DB_HOST.";dbname=".DB_NAME.";charset".DB_CHARSET;
      try {

        $this->conec = new PDO($conecString, DB_USER, DB_PASSWORD);
        $this->conec->setAtribute();

      } catch (PDOExeption $e) {

        $this->conec = 'Error de conexion';
        echo "Error: ".$e->getMessage();

      }

      public function Conectar(){

        return $this->conec;

      }

    }

  }

?>
