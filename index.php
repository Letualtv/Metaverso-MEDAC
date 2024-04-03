<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metaverso MEDAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <link rel="icon" href="assets\logo-vector\MEDAC_isotipo_azul_RGB.svg" type="image/x-icon">

</head>




<body >


<!-- 2 Nuevas páginas
- Quienes somos 
- Información



-->



    <!-- ENLACE ESTILOS -->

    <style>
        <?php require('./containers/navbar/navbar.css') ?>
        <?php require('./containers/main/main.css') ?>    
        <?php require('./containers/gallery/gallery.css') ?>        
        <?php require('./containers/carousel/carousel.css') ?>
        <?php require('./containers/video/video.css') ?>
        <?php require('./containers/contact/contact.css') ?>
        <?php require('./containers/aside/aside.css') ?>
        <?php require('./containers/footer/footer.css') ?>
        <?php require('app.css') ?>
    </style>




    <!-- ENLACE COMPONENTES -->

    <?php require('./containers/navbar/navbar.php') ?>
    <?php require('./containers/main/main.php') ?>
    <?php require('./containers/gallery/gallery.php') ?>
    <?php require('./containers/carousel/carousel.php') ?>
    <?php require('./containers/video/video.php') ?>   
    <?php require('./containers/contact/contact.php') ?>
    <?php require('./containers/footer/footer.php') ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>