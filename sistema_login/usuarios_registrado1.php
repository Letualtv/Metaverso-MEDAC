<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 
    session_start();

    if(!isset($_SESSION["usuario"])){

        header("Location:login.php"); //Vuelve a mandar al usuario al Login si no se hubiera logueado correctamente

    }


 ?>
<h1>Bienvenidos usuarios</h1>

<?php

    echo " Hola  " .  $_SESSION['usuario'] . "<br>";

?>

<p><a href="cierre.php">Cierra session</p></a>

<p>Esto es informacion para usuarios</p>
</body>
</html>