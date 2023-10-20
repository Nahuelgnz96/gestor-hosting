<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css?v=1.0">
    <title>Iniciar Sesión</title>

</head>
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand text-white" href="index.php">LogoHosting</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="../index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Quiero mi pagina web</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hosting
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Hosting para Argentina</a></li>
            <li><a class="dropdown-item" href="#">Cloud Hosting Argentina</a></li>
            <li><a class="dropdown-item" href="#">Hosting VPS</a></li>
            <li><a class="dropdown-item" href="#">Dominios</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="d-flex justify-content-center" style="height: 85vh;">
    <form method="post" class="row d-flex g-5 justify-content-center align-self-center formulario1">
    
    <h1 class="text-center">Iniciar Sesión</h1>
      <div class="col-8">
        <label for="staticEmail2" class="visually-hidden">Email</label>
        <input name="email" type="text" class="form-control bg-info-subtle" id="" value="email@example.com">
      </div>
      <div class="col-8">
        <label for="inputPassword2" class="visually-hidden">Contraseña</label>
        <input name="password" type="password" class="form-control bg-info-subtle" id="" placeholder="Password">
      </div>
      <div class="col-8 text-center">
        <a href="#" class="text-white">Olvide mi contraseña</a>
      </div>
      <div class="col-8 text-center">
        <!-- <button type="submit" value="INICIAR SESION" name="btningresar" class="btn btn-info">Confirmar</button> -->
        <input name="btningresar" class="btn btn-primary" type="submit" value="INICIAR SESION">
      </div>
      <?php
                include("../model/conexion_bd.php");
                include("../controller/c_loginanterior.php");
                
                ?>
    </form>

  </div>
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>