window.onload = function(){
    var fondoLogIn = document.getElementById('LogIn');
    window.onclick = function(event) {
        if (event.target == fondoLogIn) {
            fondoLogIn.style.display = "none";
        }
    }
};