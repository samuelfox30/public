<?php

$host = 'segeshub.com';
$users = 'u339952661_5u9GF';
$db_password = 'samM9624!';

$db_name = 'u339952661_X5EYC';
$conn = new mysqli($host, $users, $db_password, $db_name);
if ($conn->connect_error){
    echo("Conexão com o db " . $db_name . " falhou: " . $conn->connect_error);
}else{
    echo "Conectado com sucesso!";
    return $conn;
}

?>