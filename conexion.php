<?php
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = '';
const DB_BASE = 'tp1';
    
$conexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_BASE);
mysqli_set_charset($conexion, 'UTF8');
?>