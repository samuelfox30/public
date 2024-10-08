<?php

  

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Educação</title>
  <link rel="stylesheet" href="src/style/style1.css">
</head>
<body>
  <div class="tudo">
    <img class="img-principal" src="src/img/logo-p.png" alt="">
    <div class="form">
      <form action="unknown.php" method="post">
        <input class="cpf-e-senha" name="cpf" type="text" placeholder="Digite seu CPF" required>
        <input class="cpf-e-senha" name="senha" type="password" placeholder="Digite sua senha" required>
        <img id="mostrar-senha" title="Mostrar senha" src="src/img/olho-senha.png" alt="">
        <input id="submit" name="submit" type="submit" value="ENTRAR">
        <a id="esqueci-minha-senha" href="https://seges.sedu.es.gov.br/users/password/new">Esqueci minha senha</a>
      </form>
    </div>
  </div>
  <img id="appolus" src="src/img/appolus.png" alt="">
</body>
</html>