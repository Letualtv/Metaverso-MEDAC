<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metaverso MEDAC</title>
    <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
    <link rel="icon" href="assets\logo-vector\MEDAC_isotipo_azul_RGB.svg" type="image/x-icon">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- ENLACE ESTILOS -->

    <link rel="stylesheet" href="containers/navbar/navbar.css">
    <link rel="stylesheet" href="containers/main/main.css">
    <link rel="stylesheet" href="containers/gallery/gallery.css">
    <link rel="stylesheet" href="containers/video/video.css">
    <link rel="stylesheet" href="containers/contact/contact.css">
    <link rel="stylesheet" href="containers/aside/aside.css">
    <link rel="stylesheet" href="containers/footer/footer.css">
    <link rel="stylesheet" href="containers/cards/cards.css">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>

    <?php require('./containers/navbar/navbar.html') ?>

    <section id="mainContainer" class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12 m-auto mainContent align-middle">
                <h1 class="text-center pt-3 ">¡Sumérgete en el Metaverso!</h1>
                <p class="text-center p-3 ">Bienvenidos al fascinante mundo del <b class="blue">Metaverso MEDAC</b> desarrollado por nuestros alumnos. <br/>
                    Os invitamos a explorar las diversas secciones y salas que componen este innovador <b class="blue">campus virtual</b> en el que podrás disfrutar de la compañía de tus compañeros, asistir a clases, ponencias, etc.
                <p class="text-center fw-bold blue">¡Todo sin moverte de casa!</p>
                </p>
                <button id="titleButton" class="btn mx-auto d-flex my-5">ENTRA AL METAVERSO</button>
            </div>
            <div class="col-md-5 col-xs-12 ">
                <img src="assets/assembly/web/imagen1rb.png" alt="Imagen de ejemplo" class="img-fluid imgMeta d-flex mx-auto">
            </div>
        </div>
    </section>





    <!-- ENLACE COMPONENTES -->


    <?php require('./containers/cards/cards.html') ?>
    <?php require('./containers/gallery/gallery.html') ?>
    <?php require('./containers/video/video.html') ?>
    <?php require('./containers/contact/contact.html') ?>
    <?php require('./containers/footer/footer.html') ?>



</body>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>