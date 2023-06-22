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
  <title>Base de Datos Interna</title>
  <link rel="stylesheet" href="fondos.css">
</head>
<body class="note">
<a href="panel.php"><button type="button" class="arrowLeft">VOLVER</button></a>


</body>
</html>

<?php
} else {
  header("Location:index.php");
}
?>
<h4> NOMBRE DEL PRODUCTO: </h4> Teclado Primus T100 <img src="https://i.postimg.cc/NfP5StVn/image-445.jpg" alt=""> <h4> VALOR FINAL: </h4>$6600 <h4> COMENTARIO: </h4>Color negro
<h4> NOMBRE DEL PRODUCTO: </h4> Teclado HyperX Alloy Originsx <img src="https://i.postimg.cc/nVXzmgMY/concepto-4487387-1.jpg" alt=""> <h4> VALOR FINAL: </h4>$9100 <h4> COMENTARIO: </h4>Color negro  
<h4> NOMBRE DEL PRODUCTO: </h4> Teclado Redragon Kumara K552 <img src="https://i.postimg.cc/MH1JDyCx/1058-producto-1019-producto-tecl-1.jpg" alt=""><h4> VALOR FINAL: </h4>$8450 <h4> COMENTARIO: </h4>Color negro
<h4> NOMBRE DEL PRODUCTO: </h4> Teclado Noganet Ganon XS <img src="https://i.postimg.cc/SNmv3F8c/D-NQ-NP-2-X-901225-MLA44221312364.webp" alt=""><h4> VALOR FINAL: </h4>$4500 <h4> COMENTARIO: </h4>Color negro 
<h4> NOMBRE DEL PRODUCTO: </h4> HyperX Cloud Stinger Core Wireless <img src="https://i.postimg.cc/PJXQ3Hcx/hyperx-cloud-stinger-core-wirele.jpg" alt=""><h4> VALOR FINAL: </h4>$7600 <h4> COMENTARIO: </h4>Color blanco
<h4> NOMBRE DEL PRODUCTO: </h4> Auriculares gamer HyperX Cloud Alpha <img src="https://i.postimg.cc/1Xb4gcpQ/1.jpg" alt=""><h4> VALOR FINAL: </h4>$15000 <h4> COMENTARIO: </h4>Color negro



