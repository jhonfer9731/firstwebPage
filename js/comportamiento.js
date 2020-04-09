window.onload = function(){
    var fondoLogIn = document.getElementById('LogIn');
    window.onclick = function(event) {
        if (event.target == fondoLogIn) {
            fondoLogIn.style.display = "none";
        }
    }
    var salones = [];
     salones[0] = this.document.getElementById('laCaira');
     salones[1] = this.document.getElementById('petret');
     salones[2] = this.document.getElementById('esplendit');
     for(var i = 0; i<salones.length; i++){
         salones[i].onclick = function(){
             fondoLogIn.style.display ="block";
         }
     }
     var contraseña2 = document.getElementsByName("contras2")[0];
     var contraseña1 = document.getElementsByName("contras")[0];
     var get_id = document.getElementsByName("id_registro")[0];
     var formRegistro = document.getElementById("formRegistro");
     var cuadrosTexto = formRegistro.getElementsByTagName("input");
     for (var i = 0; i < cuadrosTexto.length;i++)
     {
         cuadrosTexto[i].onkeyup = teclaEnter;
     }
     var botonCerrarSesion = document.getElementById("botonCerrarSesion");
     botonCerrarSesion.onclick = cerrarSesion;
     var botonReservaAdmin = document.getElementById("botonReservaAdmin");
     //botonReservaAdmin.onclick = reservaAdmin;
     var botonReservaUser = document.getElementById("botonReservaUser");
     //botonReservaUser.onclick = ReservaUser;

     
};
function cerrarSesion(){
    window.location.href = "controladores/cerrarSesion.php";
}


function teclaEnter(event){
    if(event.keyCode == 13){
        event.preventDefault();
        document.getElementById("btnRegistroUser").click();
    }
}


function checkInfo(){
     var contraseña1 = document.getElementsByName("contras")[0].value;
     var contraseña2 = document.getElementsByName("contras2")[0].value;
    if(contraseña1 != contraseña2){
        alert('La contraseña no coincide, por favor verificar');
        return false;
    }
    else
    {
        alert("informacion verificada");
        return true;
    }
}