<?php
    require("conexion.php");

      //Se conecta a la base de datos

      $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_BASE);

      //Guardo en una variable los datos de la base de datos

      $obtenerTabla = mysqli_query($conexion, "select * from publicacion");

      //Guardo en una variable el numero de elementos de la base de datos

      $cantidad_registros = mysqli_num_rows($obtenerTabla);

      //Guardo el offset de los registros ya mostrados
      //Se calcula el numero de elementos en la base de datos y se le resta los ya mostrados anteriormente (5)

      $offset1 = $cantidad_registros - 5;

      //Se obtienen los ultimos 5 elementos de una base datos

      $obtenerTablaUltimos = mysqli_query($conexion, "select * from publicacion limit 5 offset $offset1");
      session_start(); 

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
        <img src="https://placeimg.com/720/200/arch" id="banner"/>

        <div class="container" id="principal">
             <h1>Bienvenido a mi blog!</h1>

             
             <?php
              
              if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true)
              {
                echo '<a href="new_post.php" class="btn btn-primary btn-add mr-1">Agregar post</a>';
                echo '<a href="admin.php" class="btn btn-success btn-add mr-1">Administración</a>';
                echo '<a href="logout.php" class="btn btn-danger btn-add mr-1 ">logout</a>';
              }
              else
              {
                echo '<a href="login.php" class="btn btn-success btn-add">login</a>';
              }
              
              ?>
              
              


             <h2>Ultimos 5 posts</h2>


             <div id="card-list">

                    <?php 

                      /*Se recorre el array guardado anteriormente en $obtenerTablaUltimos, 
                      para poder mostrar los datos guardados dentro */

                      while ($posts = mysqli_fetch_array($obtenerTablaUltimos)) {

                        // Se guarda el id y titulo en variables diferentes

                       $idGuardado = $posts["id"];
                       $tituloMostrar = $posts["Titulo"];

                       //Se utiliza la funcion substr para mostrar los primeros 100 caracteres de la descripcion

                       $descripcionAMostrar = substr($posts["Descripcion"], 0, 100);

                       //Se guarda la direccion de la imagen a mostrar

                       $imagenAMostrar = $posts["Direccion"];

                       //Se llaman en las etiquetas html a las variables guardadas anteriormente

                          echo'
                          <div class="card" >
                            <img class="card-img-top" src="./imagenes/'."$imagenAMostrar".'" />
                            <div class="card-body">
                              <h5 class="card-title">'."$tituloMostrar".'</h5>
                              <p class="card-text">'."$descripcionAMostrar".'</p>
                              <a href="ver.php?id='."$idGuardado".'" class="btn btn-primary">Ver</a>
                            </div>
                          </div>
                          ';
                      }
                    ?>

        </div>
    </body>
</html>
