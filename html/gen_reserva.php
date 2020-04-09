<?php
        session_start();
        if(!isset($_SESSION['auth']) || $_SESSION['auth']==false){
            header("Location: index.php");
        }
        else{
            if(!($lugar = $_COOKIE["salon_elegido"])){
                echo "<script> alert('Se acabo el tiempo de espera, realice la reserva nuevamente') </script>";
                header("Location: home.php");
            }
            else{
                $dia = $_POST['dia'];
                $mes = $_POST['mes'];
                $ano = $_POST['ano'];
                $hora = $_POST['hora'];
                $user = $_SESSION['user'];
                require_once 'controladores/conexion.php';
                $mysql = conexionBaseDatos();  // funcion definida en conexion.php

                //Preguntar por si el salon ya esta reservado
                $estaReservado = true;
                $peticionFila = "SELECT * FROM reservassalones WHERE Lugar='".$lugar."' AND Dia='".$dia."' AND Mes='".$mes."' AND Ano='".$ano."' AND hora ='".$hora."'";
                if($resultado = $mysql->query($peticionFila))
                {
                    if(mysqli_num_rows($resultado)!=0){
                        $estaReservado = true;
                    }
                    else{
                        $estaReservado = false;
                    }
            
                }else{
                    echo "<h1> Error de conexion con base de datos 1</h1>";
                }
            }
                //

                 if($estaReservado == false)
                 {
                    $ingresoUsers = "INSERT INTO reservassalones VALUES('$lugar','$dia','$mes','$ano','$hora','$user',NULL)"; // Hay un problema en esta linea de codigo
                    if($salones = $mysql->query($ingresoUsers)){
                        
                        echo "<script>alert('Registro de reserva exitoso')</script>";
                        echo "<script>alert('Su Reserva: Nombre de Usuario:    ".$user."     ------    Lugar: ".$lugar.".     -------     Fecha de reserva: ".$dia."/".$mes."/".$ano.".      --------      Hora de la reserva: ".$hora.":00. ---    ¡¡ Gracias por elegirnos !!   ')</script>";
                        terminarConexion($mysql);
                        //$_SESSION['auth']==false;
                        //session_unset();
                        //session_destroy();
                        //setcookie("sesion_abierta","false",time() - 3600,'/');
                        echo "<script>window.location= 'index.php'</script>";
                    }
                    else {
                        echo "<h1> Error de conexion con base de datos </h1>";  
                    }
                 }
                 else{
                    echo "<script>alert('La fecha seleccionada ya se encuentra Reservada, por favor seleccionar otra, gracias por su comprension. ')</script>";
                    echo "<script>window.location= 'home.php'</script>";
                 }


            }

?>


<?php

function reservaDisponible($mysql){

    $peticionFila = "SELECT * FROM reservassalones WHERE Lugar='".$lugar."' AND Dia='".$dia."' AND Mes='".$mes."' AND Ano='".$ano."' hora ='".$hora."' AND User='".$user."'";

    if($resultado = $mysql ->query($peticionFila))
    {
        if(mysqli_num_rows($resultado)!=0){
            echo "<h1>".$resultado."</h1>";
            return true;
        }
        else{
            return false;
        }

    }else{
        echo "<h1> Error de conexion con base de datos </h1>";
    }

}


?>