<?php

  class UsuarioController{

    private $usuario;

    function __construct(){
      $this->usuario = new Usuario();
    }

    public function getUsuarios(){
      // code...
      $arrData = $this->usuario->SelectUsuarios();
      echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
      die();

    }

    public function getUsuario(string $id){

      // $usuario = new Usuario();
      $strIdUsuario = $id;
      if($strIdUsuario != ""){

        $arrData = $this->usuario->SelectUsuario($strIdUsuario);
  			if(empty($arrData))
  			{
  				$arrResponse = array('estatus' => false, 'msg' => 'Datos no encontrados.');
  			}else{
  				$arrResponse = array('estatus' => true, 'data' => $arrData);
  			}

        echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

      }

      die();

    }

    public function setUsuario(){

      if($_POST){

        if(empty($_POST['txtCorreo']) || empty($_POST['txtPassword']) || empty($_POST['txtFechaNacimiento']) || empty($_POST['txtTelefono'])){

          $arrResponse = array('estatus' => false, 'msg' => 'Datos Incorrectos.');

        }else{

          $intIdUsuario = intval($_POST['idUsuario']);
          $strCorreoUsuario = $_POST['txtCorreo'];
          $strPasswordUsuario = $_POST['txtPassword'];
          $strFechaNacimientoUsuario = $_POST['txtFechaNacimiento'];
          $strTelefonoUsuario = $_POST['txtTelefono'];

          if($intIdUsuario == 0){

            $requestUsuario = $this->usuario->insertUsuario($strCorreoUsuario ,
                                                            $strPasswordUsuario,
                                                            $strFechaNacimientoUsuario,
                                                            $strTelefonoUsuario);
                                                            $option = 1;


          }

          if($requestUsuario > 0){

            if($option == 1){

              $arrResponse = array('estatus' => true, 'msg' => 'Datos guardados correctamente.');

            }

          }else if ($requestUsuario == 'exit') {

            $arrResponse = array('estatus' => false, 'msg' => '¡Atención! La categoría ya existe.');
            // echo "Los datos no han sido ingresados 1";

          }else{

            $arrResponse = array("estatus" => false, "msg" => 'No es posible almacenar los datos.');
            // echo "Los datos no han sido ingresados 2";

          }

        }

        echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);

      }

      // echo "YA WE";
      die();

    }

    //Fin de la clase

  }


?>
