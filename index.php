<?php
require_once 'back/classes/Logout.php';

$logout = new Logout();
$logout->logout();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Home</title>
  </head>
  <body
    style="
      background-image: url('assets/img/bg-roxo.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    ">
    <header>
      <img src="assets/img/mcm-logo.png" alt="logo">
      <h1>Inicio</h1>
      <img src="assets/img/cps-logo.png" alt="logo">
    </header>
    <main>
      <div class="home-holder">
        <div class="home-conteiner">
          <a href="views/tela_login.php" class="btn-2 btn">
            <p>Entrar</p>
            <div class="dots-2">&gt;</div>
          </a>

          <a href="views/tela_cadastro.php" class="btn-2 btn">
            <p>Cadastrar</p>
            <div class="dots-2">&gt;</div>
          </a>

          <a href="views/tela_home.php" class="btn-3 btn">
            <p>Anônimo</p>
            <div class="dots-3">&gt;</div>
          </a>
        </div>
      </div>
    </main>
  </body>
</html>