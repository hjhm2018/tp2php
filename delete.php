<?php
require("conexion.php");
session_start();

$id = $_GET['id'];


if (!isset($_SESSION['logueado']) && $_SESSION['logueado'] == false)
    {
    header ('Location: login.php');
    }

              
$publicaciones = mysqli_query($conexion, "delete from publicacion where id=$id");
header ('Location: admin.php');

?>