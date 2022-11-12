<?php
  const BASE_URL = "http://localhost/ApiChat";

  const DB_HOST = "localhost";
  const DB_NAME = "Chat";
  const DB_USER = "root";
  const DB_PASSWORD = "123";
  const DB_PORT = 1433;
  // const DB_CHARSET = "utf8";

  //Librerias
  include_once 'Modelo/Librerias/SQLServer.librerias.php';

  //Controladores
  include_once 'Controlador/UsuarioController.controlador.php';
  // include_once '';

  //Modelos
  include_once 'Modelo/Usuario.modelo.php';
  // include_once '';

?>
