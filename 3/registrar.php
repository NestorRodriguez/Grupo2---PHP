<?php
$conexion = mysqli_connect("localhost", "root", "", "proyecto");
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$insertar = "INSERT INTO usuarios(nombre, apellido, correo, usuario, clave) VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$clave')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
if(mysqli_num_rows($verificar_usuario)>0){
    echo '<script>
            alert ("El usuario ya está registrado");
            window.history.go(-1);
        </script>';
    exit;
}

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
if(mysqli_num_rows($verificar_correo)>0){
    echo '<script>
            alert ("El correo ya está registrado");
            window.history.go(-1);
        </script>';
    exit;
}
    
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
    echo 'Error al registrarse';
}else{    
    echo '<script>
        alert ("Usuario registrado correctamente");
        window.history.go(-1);
        </script>';
}
mysqli_close($conexion);



