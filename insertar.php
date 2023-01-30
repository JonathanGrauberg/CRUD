<?php 
include('conexion.php');
$con=conectar();

$codigo=$_POST['codigo'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

$sql= "INSERT INTO productos(codigo,descripcion,precio) VALUES('$codigo','$descripcion','$precio')";

$query= mysqli_query($con,$sql);

if ($query){
    header("location: productos.php");
}else{
    echo "algo salio mal";
}

?>