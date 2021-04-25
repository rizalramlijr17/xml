<?php 
//properti db
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "phpdasar";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ('Tidak Bisa Konek ke Database !');

header('Content-Type: application/json');


?>