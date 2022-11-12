<?php

header("Content-Type: application/json");
include_once "Config/Config.php";
$ingreso = new UsuarioController();
switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    // code...
    $datos = json_decode(file_get_contents('php://input'));
    if($datos != NULL){
      $ingreso->setUsuario();
    }
    break;
  case 'GET':
      if(isset($_GET['id'])){
        echo $ingreso->getUsuario($_GET['id']);
        // echo json_decode(UsuarioController::);
      }else{
        echo $ingreso->getUsuarios();
        // echo json_decode(UsuarioController::getUsuarios());
      }
    break;

}

?>
