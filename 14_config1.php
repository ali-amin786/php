<?php
$host = 'localhost:3307';
$dbname = 'phpdemo';
$username = 'root';
$password = '';

$connection = mysqli_connect($host , $username, $password, $dbname);
if ($connection ){
    echo "connection successful";
}
else{
    echo "connection failed";
}
?>