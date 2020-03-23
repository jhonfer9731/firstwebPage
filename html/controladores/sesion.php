<?php
require_once 'conexion.php';
session_start(); // Verifica si hay una sesion anterior abierta
if(!isset($_SESSION['auth']) || $_SESSION['auth']==false){
  session_unset();
  setcookie('sesion_abierta','false', time()-3600,"/");
  setcookie('sesion_admin','false', time()-3600,"/");
  setcookie('sesion_user','false', time()-3600,"/");
}
function comprobarUsuario(){
  $mysql = conexionBaseDatos();
  $consulta = "SELECT * FROM usuarios WHERE name='".$_POST['user']."' AND pass='".$_POST['pass']."'";
  if($Usuarios = $mysql->query($consulta)){
    if(mysqli_num_rows($Usuarios)!=0){
      //echo $consulta." OK<br>";
      session_start();
      $_SESSION['user'] = $_POST['user'];
      $_SESSION['auth'] = true;
 
      foreach ($Usuarios as $key => $admin){
      
        if($admin['admin'] >= 1){ // si es administrador entra a la funcion
          //echo $admin['admin'];
            terminarConexion($mysql);
            $valor_cookie = "true";
            $admin_cookie = "true";
            setcookie("sesion_admin",$valor_cookie, time()+360,"/");
            header("Location: ../admin.php?sesionAbierta=true");

            setcookie("sesion_abierta",$valor_cookie, time()+360,"/");
            header("Location: ../admin.php?sesionAbierta=true");
         // header("Location: ../admin.php");
        }else{
             terminarConexion($mysql); // Entra aqui si es Usuario
             $valor_cookie = "true";
             $usuario_cookie = "true";
             setcookie("sesion_user",$usuario_cookie, time()+360,"/");
             header("Location: ../admin.php?sesionAbierta=true");

             setcookie("sesion_abierta",$valor_cookie, time()+360,"/");
             header("Location: ../home.php?sesionAbierta=true");
        }
      }
    }else{
      echo $consulta." No resultados<br>";
      terminarConexion($mysql);
      header("Location: ../index.php?error=true");
    }    
  }else{
    echo $consulta." FAIL<br>";
    header("Location: ../index.php?error=true");
  }
}
comprobarUsuario();
?>