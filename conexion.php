<?php

    $db = [

        'host' => 'localhost',

        'username' => 'root',

        'password' => '',

        'db' => 'pacientes' //Cambiar al nombre de tu base de datos

    ];





    function obtenerConexionMysql() {

        $server="localhost";

        $usuario="root";

        $clave="";

        //$bbdd="nombreBaseDatos";

        $con=mysqli_connect("localhost","root","") or die("Problemas con la conexión a la base de datos:".mysqli_connect_error()) ;



            echo "<p>Conexión realizada";

            mysqli_set_charset($con,'utf8');

        return $con;

    }

?>