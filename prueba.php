<?php
    include "inicio.html";
    $resultado = mysqli_query($conexion, $imagen);
    while ($mostrarmenu = msyqli_fetch_array($resultado)) { ?>
    
    <div class="col-2 row  mt-5 informacion" >
        <a href="informacion.php?id=<?php echo $mostrarlibros['idlibros'] ?>"><img src="<?php echo $mostrarlibros['imagen']; ?>"width="180"></a><br>
        <span><?php echo $mostrarlibros['informacion']; ?></span>
    </div>     
<?php  
}
?>
<link rel="stylesheet" href="style/style.css">

            
            </div>
        </div>
    </div>
