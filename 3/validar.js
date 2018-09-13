function validar() {
    var nombre, apellido, correo, usuario, clave, telefono, expresion;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    correo = document.getElementById("correo").value;
    usuario = document.getElementById("usuario").value;
    clave = document.getElementById("clave").value;
    expresion = /\w+@\w+\.+[a-z]/;
        
    
    if(nombre === "" || apellido === "" || correo === "" || usuario === "" || clave === ""){
        alert("Llene todos los campos");
        return false;
    }
    else if(nombre.length>30){
        alert("El nombre está muy largo");
        return false;
    }
    else if(apellido.length>80){
        alert("El apellido está muy largo");
        return false;
    }
    else if(!expresion.test(correo)){
        alert("El correo no es valido");
        return false;
    }
    else if(correo.length>100){
        alert("El correo está muy largo");
        return false;
    }
    else if(usuario.length>20 || clave.length>20){
        alert("El usuario y la clave están muy largos");
        return false;
    }
}