<?php
$Usuario=$_POST['Usuario'];
$Contraseña=$_POST['Contraseña'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost","root", "", "bd_prueba");
$consulta="SELECT * FROM usuarios WHERE usuario='$Usuario' and contraseña='$Contraseña'"; //seleciona los campos de la tabla de phpmyadmin que sean igual a los datos que yo ingrese en el login
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
    header("location:gracias.html");
}

else {
    echo "Error en la autentificacion";
}

mysqli_free_result($resultado); //libera los datos obtenidos(usuario y contraseña) para que libere espacio en memoria
mysqli_close($conexion);