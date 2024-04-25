<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Metaverso MEDAC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="icon" href="assets\logo-vector\MEDAC_isotipo_azul_RGB.svg" type="image/x-icon">

  <!-- ENLACE ESTILOS -->
  <link rel="stylesheet" href="login/login.css">
  <link rel="stylesheet" href="containers/navbar/navbar.css">

  <link rel="stylesheet" href="app.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>



<?php require('containers/navbar/navbar.html') ?>

<body>


  <!-- Imagen -->
  <section class="container py-3 py-md-5">
    <form class="row gy-5 gy-lg-0 align-items-center mx-auto d-flex">

      <!-- Email input -->
      <div class="col-10 col-lg-5 justify-content-center">
        <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form2Example1">Email address</label>
          <input type="email" id="form2Example1" class="form-control" />
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form2Example2">Password</label>
          <input type="password" id="form2Example2" class="form-control" />
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> Recuerdame </label>
            </div>
          </div>

          <div class="col">
            <!-- Simple link -->
            <a href="#!">¿Contraseña olvidada?</a>
          </div>
        </div>

        <!-- Submit button -->
        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4 align-end">Entrar</button>
      </div>
      <!-- Imagen -->
      <div class="col-12 col-lg-6">
        <img class="img-fluid rounded" loading="lazy" src="assets\assembly\web\loginPic.svg" alt="Imagen de login">
      </div>
    </form>
  </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>