<?php 

    class Basedatos{

        //ATRIBUTOS
        public $usuarioBD="root";
        public $passwordBD="";

        //CONSTRUCTOR
        public function __construct(){}

        //METODOS
        public function conectarBD(){
            try{
                $datosGeneralesBD="mysql:host=localhost;dbname=tiendasarmonia";
                $conexion= new PDO($datosGeneralesBD,$this->usuarioBD,$this->passwordBD);
                return($conexion);
            }catch(PDOException $mensajeError){
                echo($mensajeError->getMessage());
            }   
        }

        public function agregarRegistros($consultaSQL){

            //1. Conectarme a la base datos
            $conexion=$this->conectarBD();

            //2. Decirle a la BD que se prepare porque le voy a enviar una consulta SQL
            $operacion=$conexion->prepare($consultaSQL);

            //3. Ejecutar la consulta
            $resultado=$operacion->execute();

            //4. Verificar el estado de la variable resultado
            if($resultado){
                echo("exito agregando los datos a la BD");
            }else{
                print_r($operacion->errorInfo());
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
        
    }



?>