<?php
 include "index.html";
 include "conexion.php";
 $id=$_GET['id'];
?>
<?php

//Mostrar todas las categorías que están activas
// Consulta Sql
$sql = "SELECT * FROM libros WHERE idimagenes = $id";


//Ejecutar la consulta
$res = mysqli_query($conn, $sql);

//Contar Filas
$count = mysqli_num_rows($res);

//Comprobar si las categorías están disponibles o no
if($count>0)
{
    //Categorías disponibles
    while($row=mysqli_fetch_assoc($res))
    {
        //Obtener los valores
        $idimagenes = $row['idimagenes'];
        $imagen = $row['imagen'];
        $titulo =$row['titulo'];
        $autor = $row['autor'];
        $genero = $row['genero'];
        $paginas = $row['paginas'];
        $publicado=$row['publicado'];
        $idioma = $row['idioma'];
        $sipnosis = $row['sipnosis']
        ?>
          <?php
    {

?>
<div> 
    <div class="mundo">
        <div class="mad">
            <img src="img/<?php echo $foto?>" alt="" while="300px" height="300px">

        </div>
        <div class="info">
            <h1><?php echo $titulo;?></h1>

            <p>Autor<br>
            <?php echo $autor;?>

            <p>Genero<br>
            <?php echo $genero;?>

            <p>Paginas<br>
            <?php echo $paginas;?>

            <p>Publicado<br>
            <?php echo $publicado;?>

            <p>Idioma<br>
            <?php echo $idioma;?>

            <p>Sinopsis<br>
            <?php echo $sipnosis;?>
            
    </div>
    <?php
            }
            ?>
</div>
<?php
}
      }
      ?>
