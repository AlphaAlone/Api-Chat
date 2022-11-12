<?php

  class Usuario extends SQLServer{

    public $strIdUsuario;
    public $strCorreoUsuario;
    public $strPasswordUsuario;
    public $strFechaNacimientoUsuario;
    public $strTelefonoUsuario;

    public function SelectUsuarios(){
      $sql = "SELECT * FROM dbo.Usuario";
      $request = $this->select_all($sql);
      return $request;
    }

    public function SelectUsuario(string $strIdUsuario){
        $this->strIdUsuario = $strIdUsuario;
        $sql = "SELECT * FROM dbo.Usuario WHERE Id ='".$this->strIdUsuario."'";
        $request = $this->select($sql);
        return $request;
    }

    public function insertUsuario(string $strCorreo, string $strPasswor, string $strFechanacimiento, string $strTelefono){

      $return = "";
      $this->strCorreoUsuario = $strCorreo;
      $this->strPasswordUsuario = $strPasswor;
      $this->strFechaNacimientoUsuario = $strFechanacimiento;
      $this->strTelefonoUsuario = $strTelefono;

      $sql = "SELECT * FROM dbo.Usuario WHERE correo = '$this->strCorreoUsuario'";
      $request = $this->select_all($sql);

      if(empty($request)){

        $query_insert = "INSERT INTO dbo.Usuario(correo, Password, FechaNacimiento, Telefono) VALUES (?, ?, ?, ?)";
        $arrData = array($this->strCorreoUsuario, $this->strPasswordUsuario, $this->strFechaNacimientoUsuario, $this->strTelefonoUsuario);
        $request_insert = $this->insert($query_insert,$arrData);
        $return = $request_insert;

      }else{

        $return = "exist";

      }

      return $return;

    }

  }


?>
