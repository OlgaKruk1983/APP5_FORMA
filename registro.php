<?php
include("conect.php");

$con=conectDB();

$nombre=$_POST['nombre'];
$pregunta1=$_POST['pregunta1'];
$pregunta2=$_POST['pregunta2'];
$pregunta3=$_POST['pregunta3'];
$pregunta4=$_POST['pregunta4'];
$pregunta5=$_POST['pregunta5'];


$insertar ="INSERT INTO evaluacion(nombre, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5) VALUES(
    '$nombre',
    '$pregunta1',
    '$pregunta2',
    '$pregunta3',
    '$pregunta4',
    '$pregunta5')";
    
    
    $query=mysqli_query($con, $insertar);

    if($query){
        header('location:realizado.html');
        exit();
    }else{

    }


?>