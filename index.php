<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metaverso MEDAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <link rel="icon" href="assets\logo-vector\MEDAC_isotipo_azul_RGB.svg" type="image/x-icon">

    <!-- ENLACE ESTILOS -->

    <link rel="stylesheet" href="containers/navbar/navbar.css">
    <link rel="stylesheet" href="containers/main/main.css">
    <link rel="stylesheet" href="containers/gallery/gallery.css">
    <link rel="stylesheet" href="containers/carousel/carousel.css">
    <link rel="stylesheet" href="containers/video/video.css">
    <link rel="stylesheet" href="containers/contact/contact.css">
    <link rel="stylesheet" href="containers/aside/aside.css">
    <link rel="stylesheet" href="containers/footer/footer.css">
    <link rel="stylesheet" href="containers/cards/cards.css">
    <link rel="stylesheet" href="app.css">

<body>



    <section id="main">
        <button id="tittle" class="btn"> ENTRA AL METAVERSO</button>
    </section>

    <!-- ENLACE COMPONENTES -->

    <?php require('./containers/navbar/navbar.html') ?>
    <?php require('./containers/cards/cards.html') ?>
    <?php require('./containers/gallery/gallery.html') ?>
    <?php require('./containers/carousel/carousel.html') ?>
    <?php require('./containers/video/video.html') ?>
    <?php require('./containers/contact/contact.html') ?>
    <?php require('./containers/footer/footer.html') ?>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>