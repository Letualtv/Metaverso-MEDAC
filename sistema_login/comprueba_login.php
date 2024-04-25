<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

    try{

        $base= new PDO ("mysql:host=localhost; port=3307; dbname=pruebas", "root", ""); 
        /* Aquí es donde iría todos los accesos de la BBDD para buscar el usuario*/

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS=:login AND PASSWORD= :password";

        $resultado=$base->prepare($sql);

        $login=htmlentities(addcslashes($_POST["login"],"/*-_"));

        $password=htmlentities(addcslashes($_POST["password"],"/"));

        $resultado->bindValue(":login", $login);

        $resultado->bindValue(":password", $password);

        $resultado->execute();

        $numero_registro=$resultado->rowCount();

        if($numero_registro!=0){

           // echo "Adelante!";

           session_start();

           $_SESSION["usuario"]=$_POST["login"];

           header("location:usuarios_registrado1.php");

           //Aquí indicar a qué página enviamos al usuario logueado


        }else{

            header("location:login.php"); //A dónde enviar al usuario si el login no es correcto.

        }


    }catch (Exception $e){

        die("Error: " . $e->getMessage());
    }


?>
    
</body>
</html>