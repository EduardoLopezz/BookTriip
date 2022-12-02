<?php 
include "conexion.php";
include "inicio.html";


$id = $_GET['id'];
$informacion = "SELECT * FROM libros WHERE idimagenes='$id'";

$resultado = mysqli_query($conn, $informacion);
$mostrarlibro = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="prod/produ.css">
    <link rel="stylesheet" href="mago/mando.css">
    <link rel="stylesheet" href="style/estilo.css">

</head>
<body>
    <img src="img/<?php echo $mostrarlibro['imagen'] ?>" width="200" alt="">
    <h1><?php echo $mostrarlibro['titulo'] ?></h1>
    <h2><?php echo $mostrarlibro['autor'] ?></h2>
    <h2><?php echo $mostrarlibro['genero'] ?></h2>
    <h2><?php echo $mostrarlibro['paginas'] ?></h2>
    <h2><?php echo $mostrarlibro['publicado'] ?></h2>
    <h2><?php echo $mostrarlibro['idioma'] ?></h2>
    <h2><?php echo $mostrarlibro['sipnosis'] ?></h2>
    
</body>
</html>
