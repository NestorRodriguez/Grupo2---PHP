<?php

$usuario = $_POST["usuario1"];
$clave = $_POST["clave1"];
$conexion = mysqli_connect("localhost", "root", "", "proyecto");
$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and clave = '$clave'";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    header("location:hola.html");
}else{
    echo "Error en la autenticación";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
