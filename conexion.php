<?php

class conexion{
    private $user = "root";
    private $pass = "";

    function conectar(){

        try{

            $pdo = new PDO('mysql:host=local;dbname=reservas'), $this->user,$this->pass;
            echo "Conexión Exitosa"

        }catch(PDOException $error){
            echo "No me pude conectar" . $error->getMessage();
        }
    }
}

$nuevaconexion = new conexion();
$nuevaconexion->conectar();
?>





class conexion{
    private $user = "root";
    private Spass = ";;
    function conectar(I)
        try{
            $pdo = new
            echo "Conexion correcta :)";
        )catch(PDOException Serror ){
            echo "No me pude conectar"
                                         Serror->>getNessage();
Snuevaconexion = new conexion();
Snuevaconexion->conectar( ();
