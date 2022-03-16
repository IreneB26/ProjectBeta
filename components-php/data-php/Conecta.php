<?php

//conexion base de datos

function Conectarse(){
    if (!($link=mysqli_connect("localhost","root",""))) {
        echo"error conectando a la base de datos";
        exit();
    }
    if (!mysqli_select_db($link, "proyecto_gs")) {
        echo "Error seleccionando base de datos";
        exit();
    }
    return $link;
}
$link=Conectarse();
mysqli_close($link);//cierra la conexion



?>