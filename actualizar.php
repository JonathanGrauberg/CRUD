<?php 
include('conexion.php');
$con=conectar();

$id=$_POST['id'];
$codigo=$_POST['codigo'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

$sql= "UPDATE productos SET codigo='$codigo', descripcion='$descripcion', precio='$precio' WHERE id='$id'";
$query= mysqli_query($con,$sql);

if ($query){
    header("location: productos.php");
}else{
    echo "algo salio mal";
}

?>