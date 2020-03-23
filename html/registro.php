<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="basedatoslecker";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
   // echo "<h1> algo </h1>";
   /*
foreach($_POST as $key => $value){
    echo "<h1>".$key."-"."$value"."</h1>";
}*/
 //recuperar las variables
 $name= $_POST['nombre_registro'];
 $pass= $_POST['contras'];

 //$mensaje=$_POST['mensaje'];
 //hacemos la sentencia de sql
 $id=$_POST["id_registro"];
 $sql="INSERT INTO usuarios VALUES('$id','$name','$pass')";
 //ejecutamos la sentencia de sql
 $ejecutar=mysqli_query($con,$sql);
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
?>
