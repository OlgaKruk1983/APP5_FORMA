<?php
function conectDB(){
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $base = "text";

    $con=mysqli_connect($servidor,$usuario,$password,$base) or die("no se pudo conectar con la bd");
    
    return $con;

}
?>