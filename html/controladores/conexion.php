<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS","");
define("DB", "basedatoslecker");

function conexionBaseDatos(){
  $enlace = new mysqli(HOST, USER, PASS, DB);
  if($enlace->connect_error){
    $error = "Error de conexion ".$enlace->connect_errno
            ." Mensaje: ".$enlace->connect_error;
    die($error);
  }
  return $enlace;
}
?>