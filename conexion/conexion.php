<?php
$user="root";
$server="localhost";
$bd="estanteria";
$password="mysql";

$conn=mysqli_connect($server, $user, $password, $bd);
if(!$conn){
    die ("Conexión fallida credenciales incorrectas".mysqli_connect_error());
}
//echo "Conexión exitosa";

?>