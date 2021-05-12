<?php

    if(!isset($_SESSION)){
        session_start();
    }


    class Basedatos{

        //ATRIBUTOS
        public $usuarioBD="root";
        public $passwordBD="";
        public $servidorBD="mysql:host=localhost;";
        public $nombreBD="dbname=tiendasarmonia";

        //CONSTRUCTOR
        public function __construct(){}

        //METODOS
        public function conectarBD(){
            try{
                $datosGeneralesBD=$this->servidorBD.$this->nombreBD;
                $conexion= new PDO($datosGeneralesBD,$this->usuarioBD,$this->passwordBD);
                return($conexion);
            }catch(PDOException $mensajeError){
                header("Location:../views/error.php");
            }   
        }

        public function escribirRegistros($consultaSQL,$tipoConsulta){

            //1. Conectarme a la base datos
            $conexion=$this->conectarBD();
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            try{
                //2. Decirle a la BD que se prepare porque le voy a enviar una consulta SQL
                $operacion=$conexion->prepare($consultaSQL);
                //3. Ejecutar la consulta
                $resultado=$operacion->execute();
                //4. Clasificar la consulta
                $this->clasificarConsulta($tipoConsulta);

            }catch(PDOException $mensajeError){
                header("Location:../error.php");
            }

        }

        public function buscarRegistros($consultaSQL){
            
            //1. Conectarme a la base datos
            $conexion=$this->conectarBD();

            //2. Decirle a la BD que se prepare porque le voy a enviar una consulta SQL
            $operacion=$conexion->prepare($consultaSQL);

            //3. Definir COMO(en que formato) nos llegará la información
            //FETCH_ASSOC-->ENVIA LOS DATOS EN FORMA DE ARRAY MULTIDIMENSIONAL
            $operacion->setFetchMode(PDO::FETCH_ASSOC);

            //4 Ejecutar la operacion
            $resultado=$operacion->execute();

            //5. Retornar la información solicitada
            return($operacion->fetchAll());
        }

        public function clasificarConsulta($tipoConsulta){ 

            switch ($tipoConsulta) {
                case 'insert':
                    $_SESSION["mensaje"]="exito agregando registros";
                    header("Location:../views/registrarProductos.php");
                break;
                case 'delete':
                    $_SESSION["mensaje"]="exito eliminando producto";
                    header("Location:../views/listarProductos.php");
                break;
                case 'update':
                    $_SESSION["mensaje"]="exito editando el producto";
                    header("Location:../views/listarProductos.php");
                break;      
            }
        }

    }

?>