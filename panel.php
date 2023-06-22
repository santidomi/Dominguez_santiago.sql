<!-- El archivo mostrar_contenido.php deberá contener una botonera que permita realizar, finalizar y ver pedidos (registros, o la que corresponda con la temática seleccionada).
Las opciones serán “Realizar pedido”, “Ver pedidos”, “Finalizar pedidos”. -->
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
        <title>Sistema de Administracion</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1 class="titulo">
            <center> SISTEMA DE ADMINISTRACION </center>
        </h1>

        <section class="botonera">
            <center>
                <ul class="menu_principal">

                    <li><a href="bdtexto.php">PRODUCTOS</a></li>
                    <li><a href="realizar_pedidos.php">REALIZAR PEDIDO</a></li>
                    <li><a href="verpedidos.php">VER PEDIDO</a></li>
                    <li><a href="finalizarpedidos.php">FINALIZAR PEDIDO</a></li>
            
                </ul>
            </center>
        </section>

        <center><a href="salir.php"><button type="button" class="cerrars">CERRAR SESION</button></a></center>

    </body>

    </html>
    
    <?php
} else {
    header("Location:index.php");
}
    ?>