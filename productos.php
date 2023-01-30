<?php 
include('conexion.php');
$con=conectar();

$sql= "SELECT * from productos";    

$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock de la Vinoteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>INGRESO</h1>   
                <form action="insertar.php" method="post">
                    <input type="number" class="form-control mb-3" name="codigo" placeholder="Código" maxlength="15">
                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripción">
                    <input type="number" class="form-control mb-3" name="precio" placeholder="Precio" maxlength="6">
                    
                    <input type="submit" class="btn btn-primary" value="Añadir">
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-dark">
                    <tr>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th></th>
                        <th></th>
                    </tr>   
                    </thead>
                    <tbody>
                        <?php 
                        while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <th><?php echo $row['codigo']?></th>             
                            <th><?php echo $row['descripcion']?></th>
                            <th><?php echo "$",$row['precio']?></th>
                            <th><a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-info">Editar</a></th>
                            <th><a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">Eliminar</a></th>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</body>
</html>