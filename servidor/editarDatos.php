<?php

//0. INCLUIR EL ARCHIVO DONDE ESTA PROGRAMADA NUESTRA CLASE BASEDATOS
include("Basedatos.php");
include("../models/Productos.php");

if(isset($_POST["botonEditar"])){

    //1. capturar el id a editar
    $id=$_GET["id"];
    
    //2. Recibo los datos a editar
    $nombreProducto=$_POST["nombreEditar"];
    $precioProducto=$_POST["precioEditar"];
    $fotoProducto=$_POST["fotoEditar"];

    //3. Crear la consulta SQL para EDITAR REGISTROS
    $modeloProductos=new Productos();
    $consultaSQL=$modeloProductos->editarProducto($id,$nombreProducto,$precioProducto,$fotoProducto);

    //5. LLamar el metodo editarregistros
    $operacionBD= new Basedatos();
    $operacionBD->escribirRegistros($consultaSQL,"update");


}



?>