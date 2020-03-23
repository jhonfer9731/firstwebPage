<?php
  session_start();
  if(!isset($_SESSION['auth']) || $_SESSION['auth']==false){
    header("Location: index.php");
  }
  require_once 'controladores/conexion.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo_home.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Home | Lecker </title>
  </head>
  <body>
  <header id="portfolio">
    <div class="container">

      <!-- Ventana de registro -->
      <div id="LogIn" class="modulo">
        <!--Contenido del formulario de registro y sesion -->
        <form method="POST" action="controladores/sesion.php" class="animate_LogIn">
          <div id="btn_container">
            <button onclick="document.getElementById('LogIn').style.display = 'none'" tittle="CerrarLogIn" id="cerrarLogIn">Cerrar</button>
          <div class="clear"></div>
          </div>
          <div id=content_LogIn>
            <div class="marcalog">
              <h1 id="marca_LogIn"><b>Lecker</b></h1><h1>Restaurante y repostería</h1><h2 style="margin: 0px auto;">Bienvenido</h2>
            </div>
            <label id="label_correo_login">Correo</label>
            <input type="text" name="user" required> 
            <label id="label_contraseña_login">Contraseña</label><br>  
            <input type="password" name="pass" required>
            <input type="submit" value="Login" id="login_submit">
          </div>  
            <button name="Cancelar" onclick="document.getElementById('LogIn').style.display = 'none'"  title="Cancelar" id="btn_cancelarLog">Cancelar</button>
            <label id="label_contraseña_crear_cuenta">¿Aún no tiene una cuenta?  Regístrese ahora mismo</label>
            <br>
            <div id="cont_btn_registro">
              <a id="btn_registro2" href="#registro" onclick="document.getElementById('LogIn').style.display = 'none'">Registrarse</a>
            </div>
            <?php
            if(isset($_GET['error']) && $_GET['error']==true){ // sesion.php manda true cuando no encuentra al usuario y contraseña
            ?>
              <script>
                document.getElementById('LogIn').style.display = 'block';
              </script>
              <h4 style='color: #fefefe;'>Usuario o contraseña invalido</h4>
              <?php
            }
            ?>
        </form>
      </div>
      
      
      <h1><b>Lecker</b></h1><h1>Restaurante y repostería</h1>
      <div class="clear"></div>
      <h2>Diseñado por: Jhon Fernando Benavides Bastidas y Santiago Alexis Patiño</h2>
      <nav>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#contenedor_precios">Precios</a></li>
          <li><a href="#habilidades">Habilidades</a></li>
          <li><a href="#Eventos">Eventos</a></li>
          <li><a href="#contacto">Contacto</a></li>
          <li><a href="#footer">ACERCA DE</a></li>
              <button onclick="document.getElementById('LogIn').style.display ='block'" id="botonIniciarSesion">Login</button>
              <a id="btn_registro" href="#registro">Registrarse</a>
        </ul>
      </nav>
    </div>
  </header>
    <h1 class="Titulo1User">Sección de reservas</h1>
    <h2 class="Titulo1User">Bienvenido <?php echo $_SESSION['user']?></h2>
    <div class="container2">
      <article class="card">
        <h2 class="Titulo1User">Salones disponibles: </h2>
        <table id="salonesDisp">
            <?php
              $mysql = conexionBaseDatos();  // funcion definida en conexion.php
              $consulta = "SELECT * FROM productos_salones";
              if($salones = $mysql->query($consulta)){
                if(mysqli_num_rows($salones)!=0){
                  foreach ($salones as $key => $salon){
                    echo "<tr>";
                    echo "<td>".$salon['id']."</td>";
                    echo "<td>".$salon['nombre']."</td>";
                    echo "<td>".$salon['Precio']."</td>";
                    echo "<td align = 'center'><img src='".$salon['imagen']."' width = 300></td>";
                    echo "<td align = 'center'><form method='GET' action='seleccionFecha.php'>";
                    echo "<button name='reservarSalon' id='btn_reservar'><a id='enlace_res' href='seleccionFecha.php?salon=".$salon['id']."'>Reservar</a></button>";
                    //echo "<input type='submit' name='salon' value='".$salon['id']."'>Reservar</input></form></td>";
                    echo "</tr>";
                  }
                }
                else
                {
                  echo "<h1> No hay salones en la base de datos </h1>";
                }
              }
              else 
              echo "<h1> Error de conexion con base de datos </h1>";
            ?>
        </table>
      </article>
    </div>
    <footer id="footer">
  <div class="row">
    <div class="info-intro">
      <h3>Lecker</h3>
      <p>Diseñado por Jhon Fernando Benavides Bastidas y Santiago Alexis Patiño</p>
      <p>Powered by <a href="https://www.udea.edu.co" target="_blank">UdeA</a></p>
      <p>Todos los derechos reservados © </p>
      <p>Medellin<br>2019</p>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li>|</li>
        <li><a href="#contenedor_precios">Precios</a></li>
        <li>|</li>
        <li><a href="#habilidades">Habilidades</a></li>
        <li>|</li>
        <li><a href="#Eventos">Eventos</a></li>
        <li>|</li>
        <li><a href="#contacto">Contacto</a></li>
        <li>|</li>
        <li><a href="#footer">ACERCA DE</a></li>
      </ul>
    </div>

    <div class="info-noticia">
      <h4>TAGS</h4>
      <p>
        <span class="tag-item">Pastelería</span> <span class="tag-item">Elegancia</span> <span class="tag-item">Comodidad</span>
        <span class="tag-item">Restaurante</span> <span class="tag-item">Eventos</span> <span class="tag-item">Salones</span>
        <span class="tag-item">Chocolate</span> <span class="tag-item">Tentación</span> <span class="tag-item">Carne al carbón</span>
        <span class="tag-item">Pastas</span>
      </p>
    </div>

  </div>
  </footer>
  </body>
</html>
