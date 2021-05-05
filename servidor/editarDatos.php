<?php

//0. INCLUIR EL ARCHIVO DONDE ESTA PROGRAMADA NUESTRA CLASE BASEDATOS
include("Basedatos.php");

if(isset($_POST["botonEditar"])){

    //1. capturar el id a editar
    $id=$_GET["id"];
    
    //2. Recibo los datos a editar
    $nombreProducto=$_POST["nombreEditar"];
    $precioProducto=$_POST["precioEditar"];
    $fotoProducto=$_POST["fotoEditar"];

    //3.Crear un objeto(sacarle copia  a la clase) de la clase BaseDatos
    //TODOS LOS OBJETOS SON VARIABLES
    $operacionBD= new Basedatos();

    //4. Crear la consulta SQL para EDITAR REGISTROS
    $consultaSQL="UPDATE productos SET nombre='$nombreProducto',precio='$precioProducto',url_foto='$fotoProducto' WHERE id='$id'";

    //5. LLamar el metodo editarregistros
    $operacionBD->escribirRegistros($consultaSQL,"update");
   

}



?>