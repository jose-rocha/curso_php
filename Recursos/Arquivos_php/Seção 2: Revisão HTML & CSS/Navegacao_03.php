<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/mascotePhp.jpeg" type="image/x-icon">
    <title>Navegação 03</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios </h2>
    </header>
    <main class="principal">
        <div class="conteudo">
           <nav class="modulos">
            <div class="modulo verde">
              <h3>Módulo 01</h3>
              <ul>
                <li><a href="exercicio.php?dir=teste&file=teste">Exercicioc A</a></li>
                <li><a href="#">Exercicioc B</a></li>
                <li><a href="#">Exercicioc C</a></li>
              </ul>
            </div>
            <div class="modulo vermelho">
              <h3>Módulo 02</h3>
              <ul>
                <li><a href="#">Exercicioc A</a></li>
                <li><a href="#">Exercicioc B</a></li>
                <li><a href="#">Exercicioc C</a></li>
              </ul>
            </div>
            <div class="modulo azul">
              <h3>Módulo 03</h3>
              <ul>
                <li><a href="#">Exercicioc A</a></li>
                <li><a href="#">Exercicioc B</a></li>
                <li><a href="#">Exercicioc C</a></li>
              </ul>
            </div>
            <div class="modulo roxo">
              <h3>Módulo 04</h3>
              <ul>
                <li><a href="#">Exercicioc A</a></li>
                <li><a href="#">Exercicioc B</a></li>
                <li><a href="#">Exercicioc C</a></li>
              </ul>
            </div>
            <div class="modulo laranja">
              <h3>Módulo 05</h3>
              <ul>
                <li><a href="#">Exercicioc A</a></li>
                <li><a href="#">Exercicioc B</a></li>
                <li><a href="#">Exercicioc C</a></li>
              </ul>
            </div>
            <div class="modulo verde-escuro">
              <h3>Módulo 06</h3>
              <ul>
                <li><a href="#">Exercicioc A</a></li>
                <li><a href="#">Exercicioc B</a></li>
                <li><a href="#">Exercicioc C</a></li>
              </ul>
            </div>
            <div class="modulo vermelho-escuro">
              <h3>Módulo 07</h3>
              <ul>
                <li><a href="#">Exercicioc A</a></li>
                <li><a href="#">Exercicioc B</a></li>
                <li><a href="#">Exercicioc C</a></li>
              </ul>
            </div>
            <div class="modulo azul-escuro">
              <h3>Módulo 08</h3>
              <ul>
                <li><a href="#">Exercicioc A</a></li>
                <li><a href="#">Exercicioc B</a></li>
                <li><a href="#">Exercicioc C</a></li>
              </ul>
            </div>
            <div class="modulo roxo-escuro">
              <h3>Módulo 09</h3>
              <ul>
                <li><a href="#">Exercicioc A</a></li>
                <li><a href="#">Exercicioc B</a></li>
                <li><a href="#">Exercicioc C</a></li>
              </ul>
            </div>
           </nav>
        </div>
    </main>
    <footer class="rodape">
        CODER & ALUNOS © <?= date('Y'); ?>
    </footer>   
    
    <!-- <script src="javascript/app.js"></script> -->
</body>
</html>
