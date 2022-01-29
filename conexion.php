<?php

    $nombreServidor = "";
    $usuario = "";
    $contrasena = "";
    $nombreBaseDatos = "bdlistado";

    try {

        $conn = new PDO("sqlsrv:server=$nombreServidor;database=$nombreBaseDatos", $usuario, $contrasena);

        //echo "Conexion exitosa en el servidor $nombreServidor";
        
    } catch (Exception $e) {
        echo "Ocurrió un error en la conexion. " .$e->getMessage();
    }

?>