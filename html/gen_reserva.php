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
                require_once 'controladores/conexion.php';
                $mysql = conexionBaseDatos();  // funcion definida en conexion.php
                $ingresoUsers = "INSERT INTO reservassalones VALUES('$lugar','$dia','$mes','$ano','$hora',NULL)"; // Hay un problema en esta linea de codigo
                if($salones = $mysql->query($ingresoUsers)){
                    
                    echo "<script>alert('Registro de reserva exitoso')</script>";
                    echo "<script>alert('Su Reserva:    Lugar: ".$lugar.".     -------     Fecha de reserva: ".$dia."/".$mes."/".$ano.".      --------      Hora de la reserva: ".$hora.":00. ---     Gracias por elegirnos')</script>";
                    terminarConexion($mysql);
                    $_SESSION['auth']==false;
                    session_unset();
                    //session_destroy();
                    setcookie("sesion_abierta","false",time() - 3600,'/');
                    echo "<script>window.location= 'index.php'</script>";
                }
                else {
                    echo "<h1> Error de conexion con base de datos </h1>";  
                }
            }

        }


?>