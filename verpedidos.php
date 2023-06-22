<!-- Se deberán mostrar los pedidos realizados pendientes de entrega.
Cada pedido tendrá una opción de finalizar. Esta acción modificará el valor del campo “procesando” a finalizado. -->

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
    <title>Sistema de Administracion - Ver Pedidos</title>
    <link rel="stylesheet" href="fondos.css">
</head>

<body>

<a href="panel.php"><button type="button" class="arrowLeft">VOLVER</button></a>


    <section class="contenedor_pedido">

        <?php

        include("conexion.php");
        $consulta_db = mysqli_query($conexion_db, "SELECT * FROM pedido");

        // lo siguiente te permite desmenuzar cada uno de los datos
        while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
        ?>

            <div class="caja_pedido">

                <h2> <?php echo $mostrar_datos['nombre'] . " " . "$ ". $mostrar_datos['valor']; ?></h2>

                <img src="img/<?php echo $mostrar_datos['imagen'] ?>" alt="<?php echo $mostrar_datos['nombre']; ?>" class="imga">

                <p class="caract">
                    <?php echo $mostrar_datos['descripcion']; ?>
                </p>

                <a href="eliminar.php?id=<?php echo $mostrar_datos['id']; ?>"> <button> Pedido procesado con éxito </button></a>

            </div>
        <?php
        }
        ?>

    </section>
</body>

</html>

<?php
} else {
    header("Location:index.php");
}