<?php
session_start(); 

//tomar los datos que ponen en el formulario.
$nombre_pedido = $_POST ['nombre'];
$valor_pedido = $_POST ['valor'];
$imagen_pedido = $_POST ['imagen'];
$descripcion_pedido = $_POST ['descripcion'];
$conexion_db = mysqli_connect ("localhost", "root", "", "php_intermedio") or exit ("no se pudo conectar");


//insertar en base de datos
mysqli_query($conexion_db, "INSERT INTO pedido VALUES (DEFAULT, '$nombre_pedido','$valor_pedido','$imagen_pedido','$descripcion_pedido')");

mysqli_close($conexion_db);
header("Location:realizar_pedido.php?ok");
?>