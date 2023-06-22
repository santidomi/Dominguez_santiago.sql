<?php
include ("conexion.php");

$id_pedido = $_GET ['id'];

mysqli_query($conexion_db, "DELETE FROM pedido WHERE id=$id_pedido");

header("Location: verpedidos.php");