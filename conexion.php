<?php
function conectar(){
$host="localhost";
$user="root";
$password="";

$bd="crud_vinoteca";

$con=mysqli_connect($host,$user,$password);

mysqli_select_db($con,$bd);
        
return $con;

}
?>