<?php
    session_start();
    session_unset(); //Se eliminan los valores de la variable $_SESSION
     // Se Cierra la session, la variable de autorizacion ya no existe, es NULL
    
    setcookie('sesion_abierta','false', time()-3600,"/");
    setcookie('sesion_admin','false', time()-3600,"/");
    setcookie('sesion_user','false', time()-3600,"/");
    echo "<script>
    window.location= '../index.php".'?SesionCerrada'."=true';
    </script>";
    echo $_COOKIE['sesion_abierta'];
    echo $_COOKIE['sesion_user'];
    echo $_COOKIE['sesion_admin'];

?>