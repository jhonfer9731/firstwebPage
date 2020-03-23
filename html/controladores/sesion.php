<?php
require_once 'conexion.php';

function comprobarUsuario(){
  $mysql = conexionBaseDatos();
  $consulta = "SELECT * FROM usuarios WHERE name='".$_POST['user']."' AND pass='".$_POST['pass']."'";
  if($Usuarios = $mysql->query($consulta)){
    if(mysqli_num_rows($Usuarios)!=0){
      echo $consulta." OK<br>";
      session_start();
      $_SESSION['user'] = $_POST['user'];
      $_SESSION['auth'] = true;
      terminarConexion($mysql);
      $valor_cookie = "true";
      setcookie("sesion_abierta",$valor_cookie, time()+360,"/");
      header("Location: ../home.php?sesionAbierta=true");
    }else{
      echo $consulta." No resultados<br>";
      terminarConexion($mysql);
      header("Location: ../index.php?error=true");
    }    
  }else{
    echo $consulta." FAIL<br>";
    header("Location: ../index.php?error=true");
  }

  
//  $Usuarios = array(
//      array('name'=>"juan",'pass'=>"123456"),
//      array('name'=>"luis",'pass'=>"123456"),
//      array('name'=>"sebas",'pass'=>"123456"),
//      array('name'=>"david",'pass'=>"123456"),
//      array('name'=>"sara",'pass'=>"123456")
//  );
  
  
//  foreach ($Usuarios as $key => $usuario){
//    echo $usuario['name']." ".$usuario['pass'];
//    if($_POST['user']==$usuario['name'] && $_POST['pass']==$usuario['pass']){
//      echo " OK<br>";
//      break;
//    }else{
//      echo " FAIL<br>";
//    }
//  }
  
}
comprobarUsuario();
?>