<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "buscapet";

$conn = mysqli_connect($servername, $username, $password, $db_name);
if (!$conn) {
    echo "Erro de conexão!"
;}