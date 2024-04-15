<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metaverso MEDAC</title>
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
    <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
<body>



    <?php require('./containers/navbar/navbar.html') ?>
    <section id="main">
        <button id="tittle" class="position-absolute top-50 start-50 translate-middle"> ENTRAR AL METAVERSO</button>
    </section>

    <!-- ENLACE COMPONENTES -->


    <?php require('./containers/cards/cards.html') ?>
    <?php require('./containers/gallery/gallery.html') ?>
    <?php require('./containers/carousel/carousel.html') ?>
    <?php require('./containers/video/video.html') ?>
    <?php require('./containers/contact/contact.html') ?>
    <?php require('./containers/footer/footer.html') ?>



</body>
<script src="script.js"></script>

</html>