<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=1.5">
    <title>Proyecto</title>
</head>
<body >
<nav class="navbar navbar-expand-lg">
  <div class="container ">
    <a class="navbar-brand text-white" href="index.php">LogoHosting</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Clientes</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Diseño de Páginas Web</a></li>
            <li><a class="dropdown-item" href="#">Páginas Web Adaptativas</a></li>
            <li><a class="dropdown-item" href="#">Páginas Web Autoadministrables</a></li>
            <li><a class="dropdown-item" href="#">Hosting</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contacto</a>
        </li>
      </ul>
      <a class="btn btn-sm btn-outline-light ms-3" for="light-outlined" href="views/login.php" type="submit">Solicitar<br>Presupuesto</a>
    </div>
  </div>
</nav>


<div class="inicio">
  <div class="container ">
    <h2><br></h2>
    <h1 class="titulo mt-5 text-center">DISEÑO WEB PREMIUM</h1>
    <h2 class="subtitulo text-center">Resultados</h2>
    <div class="d-flex justify-content-center">
    <a href="#seccion2" type="button" class="btn btn-lg btn-outline-secondary mt-5 ">CONOCÉ MÁS</a>
    </div>
    
  </div>

</div>

<div id="seccion2" class="seccion2">
  <div class="container-fluid bg-light text-dark p-5 mt-5">
    <div class="row">
      <div class="col-6">
        <p>ESPECIALISTAS EN DISEÑO DE PÁGINAS WEB</p>
        <h2 class="titulo text-dark"> {nombre} DISEÑO WEB</h2>
        <p> {nombre} brindamos servicio de diseño web premium. <br> Desarrollamos páginas web de alto impacto apuntadas a maximizar resultados. Somos especialistas en generar soluciones a medida y diseño personalizado para cada cliente.</p>
        
      </div>
      <div class="col-6 d-flex align-items-center">
      <img src="img/logo.png" alt="" class="img-fluid "> 
      </div>
    </div>

  </div>
</div>

<div class="seccion3 p-5">
  <div class="container p-5">
    <div class="row d-flex align-items-center p-5">
      <div class="col-6 text-end ">
          <h2 class="titulo2 me-5">Nuesra Mision</h2>
          <h2 class="subtitulo2 me-5">NOS MOTIVA,<br>
              MOVILIZA,<br>
              IMPULSA.
          </h2>
      </div>
        
      <div class="col-6">
        <p class="parrafo1 ms-4">"<b>Realmente creemos</b> que con una estrategia web correcta, comunicación acertada y diseño creativo, tu empresa puede sacar un provecho de internet MUY superior al que imaginas posible."</p>
      </div>
    </div>
  </div>
</div>

<div class="seccion4 bg-light">
  <div class="container p-5 text-dark">
    <h2 class="text-center">TRABAJOS RECIENTES</h2>
    <p class="text-center"> CONOCÉ CÓMO TRABAJAMOS</p>
  </div>
</div>

<div class="seccion5 d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-6 d-flex align-items-center">
        <div class="container">
        <h2 class="fs-1 text-center">Diseñamos páginas web</h2>
        <h3 class="titulo text-center">Creativas</h3>
        </div>
        
      </div>
      <div class="col-6">
        <form method="post" class="row">
          <h1 class="text-center">Consultanos ahora</h1>
          <div class="col-12 mb-3">
            <label for="staticEmail2" class="visually-hidden">Nombre</label>
            <input name="nombre" type="text" class="form-control bg-transparent text-white" id="" placeholder="Nombre">
          </div>
          <div class="col-6 mb-3">
            <label for="staticEmail2" class="visually-hidden">Email</label>
            <input name="email" type="text" class="form-control bg-transparent text-white " id="" placeholder="Email">
          </div>
          <div class="col-6 mb-3">
            <label for="inputPassword2" class="visually-hidden">Telefono</label>
            <input name="telefono" type="number" class="form-control bg-transparent text-white" id="" placeholder="Telefono">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="visually-hidden">Example textarea</label>
            <textarea class="form-control bg-transparent text-white " id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
          </div>
        </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>