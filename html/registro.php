<?php
 /*
 
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="basedatoslecker";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
$con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");

*/

require_once 'controladores/conexion.php';
$mysql = conexionBaseDatos();

$consulta = "SELECT * FROM usuarios WHERE name='".$_POST['nombre_registro']."'";
//recuperar las variables

$name= $_POST['nombre_registro'];
$pass= $_POST['contras'];

if($Usuarios = $mysql->query($consulta)){
    if(mysqli_num_rows($Usuarios)!=0){
        echo "<script>
        alert('Ya existe un usuario con el mismo nombre, por favor elija otro');
        window.location= 'index.php#registro'
            </script>";    }
    else{
                    
            //hacemos la sentencia de sql
            $id=$_POST["id_registro"];
            $admin = 0;
            $sql="INSERT INTO usuarios VALUES('$id','$name','$pass','$admin')";
            //ejecutamos la sentencia de sql
            $ejecutar=mysqli_query($mysql,$sql);
            //verificamos la ejecucion
            $variable2 = "cero";

            if(!$ejecutar){

                echo "<script>
                alert('El id ingresado ya se encuentra registrado');
                window.location= 'index.php#registro'
                    </script>";
            
            }
            else{

                echo "<script>
                alert('Registro exitoso');
                window.location= 'index.php'
                    </script>";

            }
    }
}else{
    
}
 



?>
