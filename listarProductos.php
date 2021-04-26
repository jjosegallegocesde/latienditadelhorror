<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendita del horror</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class="bg-dark">

    <?php 

        //0. INCLUIR EL ARCHIVO DONDE ESTA PROGRAMADA NUESTRA CLASE BASEDATOS
        include("servidor/Basedatos.php");

        //1. Crear una copia (crear un objeto) de la clase BD
        $operacionBD= new Basedatos();

        //2. consulta SQL para seleccionar
        $consultaSQL="SELECT * FROM productos";

        //3. accedemos al metodo buscarRegistros y almacenamos la consulta dentro de un arrgelo
        $productos=$operacionBD->buscarRegistros($consultaSQL);

        //4. imprimir el arreglo
        /*print_r($productos);
        $productos[0];*/
       
    
    ?>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
            <img src="img/vegetables.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
                La Tiendita
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="registrarProductos.php">Registrar Productos</a>
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
                    <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit">Search</button>
                    </form>
                </div>
                </div>
            </nav>
        
    </header>

    <main class="mt-5">
    
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-white">PRODUCTOS DE LA TIENDA</h1>
                </div>
            </div>
            
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-5">
                <?php foreach($productos as $producto):?>
                    
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= $producto["url_foto"] ?>" class="card-img-top" alt="imagen">
                            <div class="card-body">
                                <h5 class="card-title"><?= $producto["nombre"] ?>-<?=$producto["marca"]?></h5>
                                <p><?= $producto["descripcion"]?></p>
                                <p class="text-danger fw-bold">$<?= $producto["precio"]?></p>
                                <a href="" class="btn btn-outline-danger">Eliminar</a>

                            </div>
                        </div>
                    </div>

                <?php endforeach?>
            </div>
        
        </div>
    
    
    </main>


    
    

    <script src="https://kit.fontawesome.com/7b642ec699.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>