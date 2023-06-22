<!-- Desarrollar un formulario que permita realizar, (cargar) un pedido. El mismo deberá tener al menos 4 ítems y deberá incluir una imagen.
Estos datos se enviarán al archivo cargar_pedido.php que deberá verificar los datos y cargados a una tabla. La tabla tendrá una opción de “estado” en donde inicialmente se cargara como “procesando”.
 -->

 <?php
session_start();
if (isset($_SESSION['admin'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Administracion - Realizar Pedido</title>
    <link rel="stylesheet" href="fondos.css">
</head>
<body>

<a href="panel.php"><button type="button" class="arrowLeft">VOLVER</button></a>

<section class="contenedor_carga">

<h3 class="titulouno"><center>CARGA DE PEDIDOS</center> </h3>

<form action="cargar_pedido.php" method="post" class="formulario">

<input type="text" name="nombre" placeholder="Pedido a procesar">
<input type="number" name="valor" placeholder="Valor del producto">
<input type="text" name="imagen" placeholder="Imagen del producto">
<textarea name="descripcion" placeholder="Descripcion" id="" cols="30" rows="10"></textarea>
<input type="submit" value="CARGAR PEDIDO">

</form> 

<?php
    if (isset($_GET['ok'])) {
        echo "<center> <h5> CARGADO CON ÉXITO. </h5> </center>";
    }
?>
</section>

</body>
</html>

<?php
} else {
    header("Location:index.php");
}