<?php

    //0. INCLUIR EL ARCHIVO DONDE ESTA PROGRAMADA NUESTRA CLASE BASEDATOS
    include("Basedatos.php");

    if(isset($_POST["botonRegistro"])){

       
        //1. RECIBIR LA INFORMACIÓN QUE LLEGA DEL CLIENTE (FORMULARIO)
        $nombreProducto=$_POST["nombreProducto"];
        $precioProducto=$_POST["precioProducto"];
        $marcaProducto=$_POST["marcaProducto"];

        //2.Crear un objeto(sacarle copia  a la clase) de la clase BaseDatos
        //TODOS LOS OBJETOS SON VARIABLES
        $operacionBD= new Basedatos();

        //3.Utilizar el metodo deseado para establecer la conexión
        $operacionBD->conectarBD();


    }else{
        echo("No deberia estar aca");
    }



?>