<?php 

//0. INCLUIR EL ARCHIVO DONDE ESTA PROGRAMADA NUESTRA CLASE BASEDATOS
include("Basedatos.php");
include("../models/Productos.php");

//1. Recibir el dato del ID a eliminar
$id=$_GET["id"];

//2.Crear un objeto(sacarle copia  a la clase) de la clase BaseDatos
//TODOS LOS OBJETOS SON VARIABLES
$operacionBD= new Basedatos();

//3.Crear la consulta SQL para ELIMINAR REGISTROS
$modeloProductos=new Productos();
$consultaSQL=$modeloProductos->eliminarProducto($id);

//4. Ejecuto el metodo para elimianr un registro
$operacionBD->escribirRegistros($consultaSQL,"delete");






?>