<?php
require("conexion.php");
session_start();

$publicaciones = mysqli_query($conexion, "select * from publicacion");

if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == false)
              {
                header ('Location: login.php');
              }

?>

<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
    <body>
        <img src="https://placeimg.com/720/200/arch" id="banner"/>

        <div class="container" id="principal">
             <h1>Admin panel</h1>
             <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Tìtulo</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    while ($posts = mysqli_fetch_array($publicaciones)) {

                    $idGuardado = $posts["id"];
                    $tituloMostrar = $posts["Titulo"];
                    echo '<tr>';
                    echo '<td>'.$idGuardado.'</td>';
                    echo '<td>'.$tituloMostrar.'</td>';
                    echo '<td><a href="edit.php?id='.$idGuardado.'">Editar <i class="fas fa-edit"></i></td>';
                    echo '<td><a href="delete.php?id='.$idGuardado.'" class="text-danger">Eliminar <i class="fas fa-trash-alt"></i></td>';
                    echo '</tr>';
                    
                    }
                    
                    ?>
                    
                </tbody>
                </table>