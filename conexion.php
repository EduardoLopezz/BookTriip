<?php
session_start();

//Constantes
define('SITEURL','http://localhost/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'libreria');


//Ejecuta código SQL
$conn = mysqli_connect(LOCALHOST,DB_USERNAME, DB_PASSWORD) or die; //Conexión a base de datos
$db_select = mysqli_select_db($conn,DB_NAME) or die; // Selecciona la BD

 ?>
