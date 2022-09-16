<?php
class ConexionDB{
    private $db='procesosdb';
    private $host='localhost';
    private $user='root';
    private $pass='';
    private $conexion;

    public function __construct()
    {
        try{
            $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);
            //echo "<script>alert('Conectado');</script>";
        }catch(Exception $e){
            echo "<script>alert('No Conectado');</script>";
        }
    }

    public function consultaProceso($id)
        {
            if($id==null){
                $sentenciasSQL = "SELECT * FROM procesos";}
            else{
                $sentenciasSQL = "SELECT * FROM procesos WHERE id='$id'";}
            try{
                return $this->conexion->query($sentenciasSQL);
                //regresa todos los registros
            }catch(Exception $e){
            echo $e;
            } 
        }

        public function actualizarProceso($id, $texto)
        {
            if($texto!=null){
            $sentenciaSQL = "UPDATE procesos SET texto='$texto' WHERE id='$id'";
            try{
                $this->conexion->query($sentenciaSQL);
                echo "<br><p>Auto $texto actualizado</p>";
            }catch(Exception $e){
                echo $e;
            }
            }
        }


        public function guardarComentario($proceso, $nombre, $comentario)
    {
        $sentenciaSQL = "INSERT INTO comentarios(proceso,nombre,comentario) VALUES('$proceso', '$nombre','$comentario')";
        try {
            $this->conexion->query($sentenciaSQL);
            print('Alta exitosa');
        } catch(Exception $e){
            echo $e;
            }
    }

    public function consultarComentarios($proceso)
        {
            if($proceso==null){
                $sentenciasSQL = "SELECT * FROM comentarios";}
            else{
                $sentenciasSQL = "SELECT * FROM comentarios WHERE proceso='$proceso'";}
            try{
                return $this->conexion->query($sentenciasSQL);
                //regresa todos los registros
            }catch(Exception $e){
            echo $e;
            } 
        }

        public function consultaAdmin($usuario)
        {
            if($usuario==null){
                $sentenciasSQL = "SELECT * FROM usuarios";}
            else{
                $sentenciasSQL = "SELECT * FROM usuarios WHERE usuario='$usuario'";}
            try{
                return $this->conexion->query($sentenciasSQL);
                //regresa todos los registros
            }catch(Exception $e){
            echo $e;
            } 
        }

/*
    public function registrarAuto($nserie, $marca, $color, $km, $modelo, $precio, $transmision)
    {
        $sentenciaSQL = "INSERT INTO autos(nserie,marca,color,km,modelo,precio,transmision) VALUES('$nserie','$marca','$color','$km','$modelo','$precio','$transmision')";
        try {
            $this->conexion->query($sentenciaSQL);
            print('Alta exitosa');
        } catch(Exception $e){
            echo $e;
            }
    }

        public function eliminarAuto($nserie)
        {
            $sentenciaSQL = "DELETE FROM autos where nserie = '$nserie'";
                try{
                    $this->conexion->query($sentenciaSQL);
                    echo "<br><p>Auto $nserie eliminado</p>";
                }catch(Exception $e){
                    echo $e;
                }
        }

        public function actualizarAuto($nserie, $marca, $color, $km, $modelo, $precio, $transmision)
        {
            if($nserie!=null){
            $sentenciaSQL = "UPDATE autos SET nserie='$nserie', marca='$marca', color='$color', km='$km', modelo='$modelo', precio='$precio', transmision='$transmision' WHERE nserie='$nserie'";
            try{
                $this->conexion->query($sentenciaSQL);
                echo "<br><p>Auto $nserie actualizado</p>";
            }catch(Exception $e){
                echo $e;
            }
            }
        }

        public function consultarAuto($nserie)
        {
            if($nserie==null){
                $sentenciasSQL = "SELECT * FROM autos";}
            else{
            $sentenciasSQL = "SELECT * FROM autos WHERE nserie='$nserie'";}
            try{
                return $this->conexion->query($sentenciasSQL);
                //regresa todos los registros
            }catch(Exception $e){
            echo $e;
            } 
        }

        public function altaCliente($rfc,$nombre,$domicilio)
        {
            $sentenciaSQL = "INSERT INTO clientes(rfc,nombre,domicilio) VALUES ('$rfc','$nombre','$domicilio')";
            try {
                $this->conexion->query($sentenciaSQL);
                echo "<br><p>Alta del cliente $nombre Exitosa</p>";
                //print('Alta de Cliente Exitosa.');
            } catch(Exception $e){
                echo $e;
                }
        }
        */

}

?>