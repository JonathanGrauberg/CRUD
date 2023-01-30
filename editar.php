<?php 
include('conexion.php');
$con=conectar();
$id=$_GET['id'];
$sql= "SELECT * FROM productos WHERE id='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
    <form action="actualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <input type="number" class="form-control mb-3" name="codigo" placeholder="Código" value="<?php echo $row['codigo']?>">
        <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripción" value="<?php echo $row['descripcion']?>">        
        <input type="number" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo "$",$row['precio']?>">
        <input type="submit" value="Actualizar" class="btn btn-primary btn-block">
    </form>
    </div>
</body>
</html>