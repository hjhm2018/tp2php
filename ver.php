<?php
    require("configuracion.php");

    //Obtengo el id y lo guardo en una variable

    $id1 = $_GET['id'];

    //Me conecto a la base de datos

    $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_BASE);
    
    //Obtengo los datos de la base de datos correspondiente al ID enviado

    $obtenerTabla = mysqli_query($conexion, "select * from publicacion where id=$id1");

    //Separo los datos de la base datos para despues obtener el Titulo, Descripcion y Direccion correspondientes

    $publicacion = mysqli_fetch_array($obtenerTabla);
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <!-- Obtenemos de php la direccion donde esta ubicada la imagen -->
        <img class="imgPost" src="./imagenes/<?php echo $publicacion['Direccion']?>"/>

            <div class="container" id="principal">
            <a href="index.php" class="btn">Home</a>
             <!-- Obtenemos de php el nombre del titulo de la publicacion -->
             <h1><?php echo $publicacion['Titulo']; ?></h1>
             <div class="contenido_post">
                 <!-- Obtenemos de php la descripcion de la publicacion -->
                 <?php echo $publicacion['Descripcion']?>
             </div>

        </div>
    </body>
</html>
