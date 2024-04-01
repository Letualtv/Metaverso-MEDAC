<!-- CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
  
  <div class="container">
    <a class=" ms-3 navbar-brand" href="#main">
      <img class="d-inline-block align-text-top " src="assets\logo-fundacion\FUNDACION_MEDAC_imagotipo_horizontal_azul_RGB.svg" alt="Logotipo de MEDAC" loading="lazy" /></a>

    <button id="btnHamburger" class="navbar-toggler col-2 py-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#n_bar" aria-controls="n_bar" aria-expanded="false" aria-label="Toggle navigation">
      <i onclick="changeI(this)" id="iHamburger" class="fa-solid fa-bars  fa-lg"></i>
    </button>

    <div class="collapse navbar-collapse " id="n_bar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link mx-3" href="#main">Inicio</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link mx-3" href="#!">Visita virtual</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3" href="#gallery">Galería </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link mx-3" href="#video">Trailer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3" href="#!">Contacto</a>
        </li>  
        <li class="nav-item mx-3 mx-lg-0 me-lg-3" > 
          <a class="text-decoration-none" href="#!"><button id="btnEntrar" type="button" class="rounded-pill mx-md-3 col-lg-12 btn btn-lg d-grid">Entrar
            </button></a>
      </li>
      </ul>
    </div>
  </div>
</nav>


<!-- Script cambio icono menu hamburger -->
<script>
  function changeI(x) {
    x.classList.toggle("fa-bars-staggered");
  }
</script>