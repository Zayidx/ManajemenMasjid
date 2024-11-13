<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "manajemenmasjid";

$db = mysqli_connect($hostname, $username, $password, $database);

if ($db->connect_error) {
    echo"Gagal Terhubung";
    die();
}


?>