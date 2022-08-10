<?php
  session_start();

//  verificando se tem usuario setado nos cookies.
  if ($_COOKIE['usuario']) {
      $_SESSION['usuario'] = $_COOKIE['usuario'];
  }

  if (!$_SESSION['usuario']) {
      header('Location: login.php');
  }
//  se não existir usuário logado redirecionar para login.
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="./images/mascotePhp.jpeg">
    <title>Projeto Login 04 - Cookies</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>

    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?> </span>
        <a href="logout.php" class="vermelho" >Sair</a>
    </nav>

    <main class="principal">
        <div class="conteudo">

            <?php require_once('menu.php');  ?>

        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('d/m/Y'); ?>
    </footer>   
    
    <!-- <script src="javascript/app.js"></script> -->
</body>
</html>
