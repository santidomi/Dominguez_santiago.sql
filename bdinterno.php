<?php
session_start();
if (isset($_SESSION['admin'])) {
?>

<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
$fecha_comen = date("d-m-Y h:i:sa");

$texto = "<h4> NOMBRE DEL PRODUCTO: </h4> ". $_POST['nombre1'] ."<h4> VALOR FINAL: </h4>". $_POST['valor1']. " <h4> COMENTARIO: </h4>". $_POST['comentario1'] . " <h4> FECHA DE PUBLICACION: </h4>". $fecha_comen ."\n";

$archivo = fopen('bdtexto.php', 'a');
fputs($archivo, $texto);

echo "<p> &nbsp; Datos Almacenados Correctamente. </p>";

?>

<form action ="panel.php" method = "POST">
<button type="submit" name="button"> Volver a Pagina Principal</button>
</form>

<?php
} else {
    header("Location:index.php");
}
?>