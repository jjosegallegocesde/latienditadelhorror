<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpotyAPP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tangerine&display=swap" rel="stylesheet">
</head>
<body>

    <header class="d-none d-md-block">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="menu">
        <div class="container-fluid text-white">

          <img src="img/vegetables.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top px-1">
            La Tiendita
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 border-start ms-2">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="registrarProductos.php">Registrar Productos</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>

            </ul>

          </div>

        </div>
      </nav>
      
      <section id="banner">
        <div>
          <h1>BIENVENIDOS</h1>
            <a href="" class="btn btn-info">Conoce más</a> 
        </div>
      </section>

    </header>

    <header class="d-block d-md-none">
      <nav class="navbar navbar-expand-lg navbar-dark fondo2">
        <div class="container-fluid text-white">

          <img src="img/vegetables.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top px-1">
            La Tiendita
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-2">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="registrarProductos.php">Registrar Productos</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>

            </ul>

          </div>

        </div>
      </nav>
    </header>
    
    <main>
      <div class="container">
        
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-4 p-5">
            <h1 class="fuente text-center">Bienvenido</h1>
            <hr>
          </div>
        </div>

        <div class="row d-flex justify-content-around mb-5">
          <div class="col-12 col-md-4">
            <section id="cortina1">
              <h3 class="text-white">
                Disfruta 30% de descuento todos los miércoles
                <span><i class="fas fa-plus-circle ps-2"></i></span>
              </h3>
            </section>
          </div>
          <div class="col-12 col-md-4">
            <section id="cortina2">
              <h3 class="text-white">
                Descuentos en carnes y pescados tarjeta afiliado
                <span><i class="fas fa-plus-circle ps-2"></i></span>
              </h3>
            </section>
          </div>
          <div class="col-12 col-md-4">
            <section id="cortina3">
            <h3 class="text-white">
                20% Descuento panaderia todos los días de 8-10am
                <span><i class="fas fa-plus-circle ps-2"></i></span>
              </h3>
            </section>
          </div>
        </div>

      </div>

      <div class="container-fluid">
        <div class="row fondo3 p-5 d-flex justify-content-between text-white">
          <div class="col-12 col-md-2 text-center">
            <i class="fas fa-medal fa-5x text-white mb-2"></i>
            <h4>CALIDAD</h4>
          </div>
          <div class="col-12 col-md-2 text-center">
            <i class="fas fa-lock fa-5x text-white mb-2"></i>
            <h4>SEGURIDAD</h4>
          </div>
          <div class="col-12 col-md-2 text-center">
            <i class="fas fa-crown fa-5x text-white mb-2"></i>
            <h4>EXCLUSIVIDAD</h4>
          </div>
          <div class="col-12 col-md-2 text-center">
            <i class="fas fa-truck-loading fa-5x text-white mb-2"></i>
            <h4>FIABILIDAD EN ENTREGAS</h4>
          </div>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-8">
            <h2 class="text-center text-muted">Conoce más de nuestra política verde</h2>
            <img src="img/banner2.png" alt="banner" class="img-fluid mx-auto d-block">
          </div>
        </div>
      </div>


    </main>



    <footer>

    </footer>
   
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script> 
  <script src="scripts/cambiomenu.js"></script>
  </body>
</html>