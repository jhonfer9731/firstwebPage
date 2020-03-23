<?php
session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Leckerer Restaurante</title>
	<meta charset="UTF-8">
  <meta name="author" content="Jhon Benavides">
  <meta name="application-name" content="Lab2CSS_Propiedades">
  <meta name="keywords" content="CSS, restaurante, comidas, chef, sabores">
  <meta name="description" content="PaginaWeb_para_restaurante">
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <script type="text/javascript" src="../js/comportamiento.js"></script>
</head>

<body>
<!-- Contenido -->
<div class="main">
  <div id="botonMenu">
    <img src="../imagenes/menuIcon.png">
  </div>
  <!-- Encabezado -->
  <header id="portfolio">
    <div class="container">

      <!-- Ventana de registro -->
      <div id="LogIn" class="modulo">
        <!--Contenido del formulario de registro y sesion -->
        <form method="POST" action="controladores/sesion.php" class="animate_LogIn" id="animate_LogIn">
          <div id="btn_container">
            <button onclick="document.getElementById('LogIn').style.display = 'none'" tittle="CerrarLogIn" id="cerrarLogIn">Cerrar</button>
          <div class="clear"></div>
          </div>
          <div id=content_LogIn>
            <div class="marcalog">
              <h1 id="marca_LogIn"><b>Lecker</b></h1><h1>Restaurante y repostería</h1><h2 style="margin: 0px auto;">Bienvenido</h2>
            </div>
            <label id="label_correo_login">Nombre de Usuario</label>
            <input type="text" name="user" required> 
            <label id="label_contraseña_login">Contraseña</label><br>  
            <input type="password" name="pass" required>
            <input type="submit" value="Login" id="login_submit">
          </div>  
            <button name="Cancelar" onclick="document.getElementById('LogIn').style.display = 'none'"  title="Cancelar" id="btn_cancelarLog">Cancelar</button>
            <label id="label_contraseña_crear_cuenta">¿Aún no tiene una cuenta?  Regístrese ahora mismo</label>
            <br>
            <div id="cont_btn_registro">
              <a id="btn_registro2" href="index.php/#registro" onclick="document.getElementById('LogIn').style.display = 'none'">Registrarse</a>
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
          <button id="botonCerrarSesion">Cerrar Sesion</button>
          <button  onclick="document.getElementById('LogIn').style.display ='inline-block'" id="botonIniciarSesion">Login</button>
          <a id="btn_registro" href="#registro">Registrarse</a>
          <?php if((isset($_COOKIE['sesion_abierta']) && $_COOKIE['sesion_abierta']==true)){?>
                <script>document.getElementById('botonCerrarSesion').style ='display : inline-block;'</script>
                <script>document.getElementById('botonIniciarSesion').style ='display : none;'</script>
                <script>document.getElementById('btn_registro').style ='display : none;'</script>
          <?php
          }
          else{ 
          ?>
            <script>document.getElementById('botonCerrarSesion').style ='display : none;'</script>
            <script>document.getElementById('botonIniciarSesion').style ='display : inline-block;'</script>
            <script>document.getElementById('btn_registro').style ='display : inline-block;'</script>
          <?php
          }?>
        </ul>
      </nav>
    </div>
  </header>
  <div class="container2">
    <aside class="float-left">
      <div class="card">
        <h1>Quienes nos recomiendan:</h1>
        <ul>
          <li class="empresa">
              <div class="marca"><h2>Nivea</h2><img class="logo" src="../imagenes/nivea.png" width=50 height=50></div>
              <p>Evento:<br>Reunion anual directivos</p>
              <a href="https://www.nivea.com.co/" target="_blank">Visitar</a>
          </li>
          <li class="empresa">
              <div class="marca"><h2>Dell</h2> <img class="logo" src="../imagenes/dell.png" width=50 height=50></div>
              <p>Evento:<br>Dia del trabajo, personal administrativo</p>
              <a href="https://www.dell.com.co/" target="_blank">Visitar</a>
          </li>
          <li class="empresa">
              <div class="marca"><h2 style="font-size: 17px">Colanta</h2> <img class="logo" id="colanta" src="../imagenes/colanta.png" width=85 height=50></div>
              <p>Evento:<br>Charla de negocios socios mayoritarios</p>
              <a href="https://colanta.com/" target="_blank">Visitar</a>
          </li>
          <li class="empresa">
              <div class="marca"><h2 style="font-size: 18px">Tiendas D1</h2> <img class="logo" id="d1" src="../imagenes/d1.jpg" width=20 height=50></div>
              <p>Evento:<br>Almuerzo directivos y socios principales</p>
              <a href="https://tiendasd1.com/" target="_blank">Visitar</a>
          </li>
        </ul>
      </div>
    </aside>
    <section class="float-center">
      <article class="card">
        <h1>Tenemos para ofrecerte:</h1>
        <p>Las mas autenticas y deliciosas recetas hechas por nuestro chef internacional, especializado en comida mediterranea y tailandesa, el lugar mas agradable para compartir con los que mas quieres y presentarte nuestros nuevos proyectos en el Lab de cocina.</p>
        <div class="clear"></div>
        <img src="../imagenes/comida5.png" id="imgComida" width=560>
        <div class="clear"></div>
        <p>Un lugar diseñado exclusivamente para tu comodidad, ya sea para realizar reuniones empresariales, rueda de negocios o para ir con su familia o amigos, compartiendo en un ambiente privado y agradable con la atención de todo un personal dispuesto a cumpplir con las exigencias del cliente.  </p>
        <img src="../imagenes/restaurante1.jpeg" class="imgLugar" width=300>
        <img src="../imagenes/restaurante2.jpeg" class="imgLugar" width=300>
        <div class="clear"></div>
      </article>
    </section>
    <aside class="float-right">
      <div class="card">
        <h1>Noticias</h1>
        <ul>
          <li>La paella es uno de los platos que más buscan los turistas en España. Y sí, es deliciosa, pero hay otras joyas culinarias que merecen ser exploradas.
          </li>
          <img class="center" src="../imagenes/paella.png" width="300">
          <li>THE ULTIMATE VEGAN SNACK BOARD (paté de aceitunas de champiñones, humus de calabaza, remolacha miso con remolacha)</li>
          <img class="center" src="../imagenes/veganSk.jpg" width="300">
          <li>Pudin de chia y linaza – Es una opción saludable para un desayuno o una merienda. Es apto para cualquier dieta ya que es vegano, sin gluten y sin lácteos y se prepara en muy pocos minutos. #vegano #singluten #pudin #chia</li>
          <img class="center" src="../imagenes/pudinChia.jpg" width="300" id="pudinImgx1">
        </ul>
      </div>
    </aside>
    <div class="clear"></div>
  </div>

  <!--Información de los proyectos -->

  <div id="infoProyectos">
	<!-- Mis habilidades --> 
    <div id=habilidades>
      <div class="card2" id="cardH">
        <h4>Especialidades del Chef<br></h4>
          <!-- Barras de progreso -->
          <p>Cocina mediterranea</p>
          <div class="barra_gris">
            <progress class="barra_dark" value="70" max="100">95%</progress>
          </div>
          <p>Cocina Tailandesa y Asiatica</p>
          <div class="barra_gris">
            <progress class="barra_dark" value="85" max="100">85%</progress>
          </div>
          <p>Pastelería Italiana</p>
          <div class="barra_gris">
            <progress class="barra_dark" value="95" max="100">95%</progress>
          </div>
          <p>Bebidas y Cocteles</p>
          <div class="barra_gris">
            <progress class="barra_dark" value="50" max="100">50%</progress>
          </div>
      </div>
    </div> 
    <div id="Eventos">
      <h2 class="card2" style="text-align: center;">Eventos y Proyectos</h2>
      <div class="slider">
        <ul>
          <li>
            <div class="card2">
                <h3>Salon Carrer</h3>
                <img src="../imagenes/salonCarrer.jpg" width="300">
                <p>Hace un mes inaguramos nuestro nuevo salon de eventos especiales donde podras disfrutar de un ambiente elegante, con el mejor estilo y diseño. Su capacidad es de 50 personas con aire acondicionado y amplias mesas, puede adquirirlo con el servicio de mesa buffet. El parqueadero esta incluido.</p>
                <div class="clear"></div>
                <h4>Acerca el mouse para parar la animaci&oacute;n</h4>
              </div>
          </li>
          <li>
            <div class="card2">
                  <h3>El pastel del mes</h3>
                  <img src="../imagenes/pastelMes.png" width="300">
                  <p>Hace un mes inaguramos nuestro nuevo salon de eventos especiales donde podras disfrutar de un ambiente elegante, con el mejor estilo y diseño. Su capacidad es de 50 personas con aire acondicionado y amplias mesas, puede adquirirlo con el servicio de mesa buffet. El parqueadero esta incluido.</p>
                  <div class="clear"></div>
                  <h4>Acerca el mouse para parar la animaci&oacute;n</h4>
            </div>
          </li>
          <li>
              <div class="card2">
                  <h3>La Caira - Nueva Sede</h3>
                  <img src="../imagenes/sedeNueva.png" width="300">
                  <p>Hace un mes inaguramos nuestro nuevo salon de eventos especiales donde podras disfrutar de un ambiente elegante, con el mejor estilo y diseño. Su capacidad es de 50 personas con aire acondicionado y amplias mesas, puede adquirirlo con el servicio de mesa buffet. El parqueadero esta incluido.</p>
                  <div class="clear"></div>
                  <h4>Acerca el mouse para parar la animaci&oacute;n</h4>
              </div>
            </li>
          <li>
              <div class="card2">
                  <h3>Tentaci&oacute;n de chocolate</h3>
                  <img src="../imagenes/pastelChocolate.jpg" width="300">
                  <p>Hace un mes inaguramos nuestro nuevo salon de eventos especiales donde podras disfrutar de un ambiente elegante, con el mejor estilo y diseño. Su capacidad es de 50 personas con aire acondicionado y amplias mesas, puede adquirirlo con el servicio de mesa buffet. El parqueadero esta incluido.</p>
                  <div class="clear"></div>
                  <h4>Acerca el mouse para parar la animaci&oacute;n</h4>
              </div>
          </li>
        </ul>
      </div>
    </div>
      <div class="clear"></div>


    <!-- Precios -->


    <div id="contenedor_precios">
      <h4>Precios Alquiler de Salones</h4>
      <!-- Tablas de precio -->
        <div class="listaTotal">
    
      <!-- Bloque Precio 1 -->
          <ul class="lista">
            <li class="titulo">La Caira</li>
            <li class="lista-item">2 Carnes + Vino Merlot</li>
            <li class="lista-item">Decoración incluida</li>
            <li class="lista-item">Valet Parking</li>
            <li class="lista-item">Ambientación musical</li>
            <li class="lista-item">
              <h2>$ 200.000</h2>
              <span class="info gris">Por evento</span>
            </li>
            <li class="gris-opaco">
              <button id="laCaira" class="button">Seleccionar</button>
            </li>
          </ul>
        
      <!-- Bloque Precio 2 -->
          <ul class="lista">
            <li class="titulo">El Petret</li>
          <li class="lista-item">1 carne al carbon + Vino cabernet sauvignon</li>
            <li class="lista-item">Decoración incluida</li>
            <li class="lista-item">Valet Parking</li>
            <li class="lista-item">Ambientación musical</li>
            <li class="lista-item">
              <h2>$ 250.000</h2>
              <span class="info gris">Por evento</span>
          </li>
            <li class="gris-opaco">
              <button id="petret" class="button">Seleccionar</button>
            </li>
          </ul>        
      <!-- Bloque Precio 3 -->
          <ul class="lista">
            <li class="titulo">Esplendit (Salon Principal)</li>
            <li class="lista-item">Plato especial de la casa + bebida a su elección</li>
            <li class="lista-item">Capacidad 200 personas</li>
            <li class="lista-item">Valet Parking</li>
            <li class="lista-item">Ambientación musical</li>
            <li class="lista-item">
              <h2>$ 300.000</h2>
              <span class="info gris">Por evento</span>
            </li>
            <li class="gris-opaco">
              <button id="esplendit" class="button">Seleccionar</button>
            </li>
          </ul>
          <div class="clear"></div>
        </div>
    </div>
  
    <div class = "contenedor_registro">

      <h4 id="registro"><b>Registro</b></h4>
 
      <form action="registro.php" method = "POST" onSubmit="return checkInfo()" id="formRegistro" >
        <div class="texto">
          <label>Nombre de Usuario: </label>
          <input class="input" maxlength="20" type="text" onkeypress="return /^[a-z0-9._-]*$/i.test(event.key)" name="nombre_registro"  required>
        </div>
        <div class="texto">
            <label>Id(solo numeros): </label>
            <input class="input"  min="0" max="9999999999" type="number" name="id_registro" placeholder="Ingrese Aquí" required>
        </div>
        <div class="texto">
            <label>Contraseña: </label>
            <input class="input" maxlength="20" pattern=".{5,}" type="password" placeholder="Debe contener 5 o mas caracteres" name="contras" required>
        </div>
        <div class="texto">
            <label>Repetir contraseña: </label>
            <input class="input" maxlength="20" pattern=".{5,}" type="password" placeholder="Debe contener 5 o mas caracteres" name="contras2" required>
        </div>
 
        <!--div class="texto">
            <label>Apellido</label>
            <input class="input" type="text" name="Name" required>
        </div>
        <div class="texto">
            <label>Id</label>
            <input class="input" type="number" name="Id " required>
        </div>

        <div class="texto">
          <label>Correo</label>
          <input class="input" type="email" name="Email" required>
        </div>
        <div class="texto">
            <label>Télefono</label>
            <input class="input" type="number" name="Telefono" required>
        </div>
        

        <div class="texto">
            <label>Repita la contraseña</label>
            <input class="input" type="password" name="Pass2" required>
        </div-->

       
      <button type="submit" id="btnRegistroUser" class="button_registro">Registrar</button>   
    </form>
    </div>
  <!-- Contact Section -->
  <div class="contenedor_contacto">
    <h4 id="contacto"><b>Informaci&oacute;n de contacto</b></h4>
    <div class="grupo">
      <div class="grupo-item">
        <p><img src="../imagenes/envelope.png"></p>
        <p>jfernando.benavides@udea.edu.co</p>
        <p>alexis.patino@udea.edu.co</p>
      </div>
      <div class="grupo-item">
        <p><img src="../imagenes/location.png"></p>
        <p>Medell&iacute;n, Colombia</p>
      </div>
      <div class="grupo-item">
        <p><img src="../imagenes/phoneW.png"></p>
        <p>+57 3054567825</p>
      </div>
      <div class="clear"></div>
    </div>
    <hr class="form total">
    <form action="../action_page.php" target="_blank">    
      <div class="texto">
        <label>Nombre</label>
        <input class="input" type="text" name="Name" required>
      </div>
      <div class="texto">
        <label>Correo</label>
        <input class="input" type="email" name="Email" required>
      </div>
      <div class="texto">
        <label>Mensaje</label>
        <textarea class="input" type="text" name="Message" id="textArea" rows="5" cols="1" placeholder="Escribe tu mensaje aqui." required></textarea>
      </div>
      <button type="submit" class="button"><i class="icono-5"></i>Enviar Mensaje</button>
    </form>
  </div>

  <!-- Pie de página -->
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
<!-- Fin de la página -->
</div>
</body>
</html>