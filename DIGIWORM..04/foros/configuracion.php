<?php
$bd_host = "localhost";
$bd_usuario = "root";
$bd_password = "sinco";
$bd_base = "digiworm";

$con = mysqli_connect($bd_host, $bd_usuario, $bd_password, $bd_base);

// Verificar la conexión
if (mysqli_connect_errno()) {
    echo "Error al conectar a MySQL: " . mysqli_connect_error();
    exit();
}
?>