<?php

  class Conexion{

    private $conec;

    function __construct(){

      $conecString = "sqlsrv:Server=".DB_HOST.",".DB_PORT.";Database=".DB_NAME;
      try {

        $this->conec = new PDO($conecString, DB_USER, DB_PASSWORD);
        $this->conec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


      } catch (PDOExeption $e) {

        $this->conec = 'Error de conexion';
        echo "Error: ".$e->getMessage();

      }

    }

    public function Conectar(){

      return $this->conec;

    }

  }

?>
