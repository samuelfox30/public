<?php

$host = 'localhost';
$users = 'root';
$db_password = 'root';

$db_name = 'seges';
$conn = new mysqli($host, $users, $db_password, $db_name);
if ($conn->connect_error){
    echo("Conexão com o db " . $db_name . " falhou: " . $conn->connect_error);
}else{
    echo "Conectado com sucesso!";
    return $conn;
}

?>