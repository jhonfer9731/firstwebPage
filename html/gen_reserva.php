<?php
        session_start();
        if(!isset($_SESSION['auth']) || $_SESSION['auth']==false){
            header("Location: index.php");
            
        }
        echo "<h1>Session con valor".$_SESSION['user']."</h1><br>";
        $lugar = $_POST['lugar'];
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];
        $hora = $_POST['hora'];

        foreach($_POST as $key => $value)
        {
            echo "<h1>".$key."</h1><br>";
            echo "<h1>".$value."</h1><br>";
        }
        require_once 'controladores/conexion.php';
        $mysql = conexionBaseDatos();  // funcion definida en conexion.php
        $ingresoUsers = "INSERT INTO reservassalones VALUES('".$lugar."','".$dia."','".$mes."','".$ano."','".$hora."',NULL)"; // Hay un problema en esta linea de codigo
        if($salones = $mysql->query($ingresoUsers)){
            
            echo "<script>alert('Registro exitoso');
            /*window.location= 'index.php';*/
            </script>";
        }   
        else {
            echo "<h1> Error de conexion con base de datos </h1>";
        }
?>