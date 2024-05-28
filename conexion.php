<?php
    //nueva conexion de la clase mysql
    //parametros: ubicacion del servidor, nombre de usuario, contraseña, base de datos
    $mysqli = new mysqli("localhost", "root", "", "lol");
    if($mysqli->connect_errno){
        echo "Fallo al conectar con MySQL: (", $mysqli->connect_errno, ") ", $mysqli->connect_errno;
    } 
    // else {
    //     echo "Todo bien, amego";
    // }
?>