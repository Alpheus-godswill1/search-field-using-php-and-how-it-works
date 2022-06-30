<?php
$db_host = "Localhost";
$db_user = "root";
$db_pass = "";
$db_name = "Database_search";

$connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(!$connect){
    die("Could not connect to database ". mysqli_error($connect));
}


?>