<!-- Se deberán listar los pedidos finalizados.
Para acceder a todas las secciones se debe ingresar como cliente (verificar sesión). -->

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
    <title>Sistema de Administracion - Finalizar Pedido</title>
    <link rel="stylesheet" href="fondos.css">
</head>
<body>
<a href="panel.php"><button type="button" class="arrowLeft">VOLVER</button></a>

<h3 class="titulodos"> <center> PRODUCTOS ENTREGADOS </center> </h3>

<form action="bdinterno.php" method="post" class="formufinal">

<input type="text" name="nombre1" placeholder="Nombre del producto procesado">
<input type="number" name="valor1" placeholder="Valor final del Producto">
<textarea name="comentario1" id="" cols="30" rows="10" placeholder="Comentarios"></textarea>
<input type="submit" value="Enviar a Base de Datos Interna">

</form>

</body>
</html>

<?php
} else {
    header("Location:index.php");
}