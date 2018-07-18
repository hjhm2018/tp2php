<?php
    session_start();
    require("conexion.php");
    if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == false)
    {
    header ('Location: login.php');
    }
    $id = $_GET['id'];
      
  $consultaVieja = mysqli_query($conexion, "select * from publicacion where id=$id");
  $postViejo = mysqli_fetch_array($consultaVieja);

  $tituloV = $postViejo['Titulo'];
  $descripcionV = $postViejo['Descripcion'];
  $direccion1 = $postViejo['Direccion'];
  $direccion2 = @$_FILES['imagen']['name'];
  $direccionIfeada = $direccion1;

if (!empty($_POST)) { // Viene un POST con datos => agrego el registro

  // Me conecto a la base de datos

  $conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_BASE);

  // Guardo variables con la informacion del post


  $titulo1 = $_POST['titulo']."";

  $descripcion1 = $_POST['contenido']."";

  //if (!$direccion2=="")
  //{
  //   $direccion2 = $_FILES['imagen']['name'];
  //}

  
  //El archivo subido lo guardo en la carpeta imagenes, con el nombre del archivo enviado


  //Guardo los datos en la base de datos 

  if ($direccion2=="")
  {
  $modificar = mysqli_query($conexion, "update publicacion SET Titulo='$titulo1', Descripcion='$descripcion1' where id=$id");
  }
  else{
  $direccionIfeada = $direccion2;
  move_uploaded_file($_FILES['imagen']['tmp_name'], "./imagenes/$direccion2");
  $modificar = mysqli_query($conexion, "update publicacion SET Titulo='$titulo1', Descripcion='$descripcion1', Direccion='$direccion2' where id=$id");
}
  //Al finalizar vuelvo a la pagina inicial

  header('Location: index.php');

}

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
            <a href="index.php" class="btn">Home</a>

             <h1>Agregar nuevo post</h1>
            
             <?php

             if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == true)
             {
               echo '<form method="post" enctype="multipart/form-data">
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="titulo">Titulo</label>
                   <input type="text" class="form-control" id="titulo" value="'.$tituloV.'" name="titulo">
                 </div>
                 <div class="form-group col-md-6">
                     <label for="archivo">Imagen portada</label>
                     <input type="file" class="form-control-file" id="archivo" name="imagen" value="'.$direccionIfeada.'">
                     <img src="imagenes/'.$direccion1.'" class="img-thumbnail">
                 </div>
               </div>
               <div class="form-row">
                   <div class="form-group col-md-10">
                     <label for="contenido">Contenido</label>
                     <textarea class="form-control" id="contenido" name="contenido">'.$descripcionV .'</textarea>
                   </div>
               </div>

               <input type="submit" value="Modificar" class="btn btn-primary">
               <a href="index.php" class="btn">Cancelar</a>
           </form>';
             }
             else
             {
               echo '<p class="text-center"> Debes estar logueado para poder escribir un nuevo post </p><a href="login.php" class="btn btn-primary btn-add">login</a> ';
             }   

             ?>

             
         </div>

     </body>
</html>
