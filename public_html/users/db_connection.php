<?php

$host = 'segeshub.com';
$users = 'u339952661_5u9GF';
$db_password = 'samM9624!';

function db_function_connection(){
    global $host, $users, $db_password;
    $db_name = 'u339952661_X5EYC';
    $conn = new mysqli($host, $users, $db_password, $db_name);
    if ($conn->connect_error){
        echo("Conexão com o db " . $db_name . " falhou: " . $conn->connect_error);
        #header('Location: sign_in.html');
        exit();
    }else{
        echo "Conectado com sucesso!";
        return $conn;
    }
}

?>