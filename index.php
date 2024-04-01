<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metaverso MEDAC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <link rel="icon" href="assets\logo-vector\MEDAC_isotipo_azul_RGB.svg" type="image/x-icon">

</head>

<body>

    <!-- ENLACE ESTILOS -->

    <style>
        <?php require('./containers/navbar/navbar.css') ?><?php require('./containers/main/main.css') ?><?php require('./containers/gallery/gallery.css') ?><?php require('./containers/video/video.css') ?><?php require('./containers/footer/footer.css') ?><?php require('app.css') ?>
    </style>




    <!-- ENLACE COMPONENTES -->

    <?php require('./containers/navbar/navbar.php') ?>
    <?php require('./containers/main/main.php') ?>
    <?php require('./containers/video/video.php') ?>
    <?php require('./containers/gallery/gallery.php') ?>
    <?php require('./containers/footer/footer.php') ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>