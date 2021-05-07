<?php 

    class Productos{

        public function registrarProducto($nombre,$precio,$marca,$foto,$descripcion){

            $consultaSQL="INSERT INTO productos(nombre,precio,marca,url_foto,descripcion) VALUES ('$nombre','$precio','$marca','$foto','$descripcion')";
            return($consultaSQL);

        }

        public function buscarProductos(){

            $consultaSQL="SELECT * FROM productos";
            return($consultaSQL);

        }

        
        public function eliminarProducto($id){

            $consultaSQL="DELETE FROM productos WHERE id='$id'";
            return($consultaSQL);

        }

        public function editarProducto($id,$nombre,$precio,$foto){
            $consultaSQL="UPDATE productos SET nombre='$nombre',precio='$precio',url_foto='$foto' WHERE id='$id'";
            return($consultaSQL);
        }



    }



?>