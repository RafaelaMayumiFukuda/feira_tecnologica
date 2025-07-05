<?php
require_once 'back/classes/Logout.php';

$logout = new Logout();
$logout->logout();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Karantina:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <title>Início</title>

    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body class="TelaInicio">
    <header>
      <div id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <div class="logo-container">
        <img src="assets/img/etecmcm.png" alt="Logo MCM"/>
      </div>
      <div class="ORGInfoHeader">
        <h1>Inicio</h1>
      </div>
    </header>
    <main>
      <div>
        <div class="ORGmainInfo">
          <p class="info">Usuário</p>
          <div class="a0">
            <a href="views/tela_home.php">Entrar sem conta</a>
            <a href="views/tela_login.php">Entrar</a>
          </div>
        </div>
        <div class="ORGmainInfo">
          <p class="info">Informativo</p>
          <div class="a0">
            <a href="https://etecmcm.cps.sp.gov.br/" target="blank">Etec - MCM</a>
            <a href="#">Vestibulinho</a>
          </div>
        </div>
        <div class="ORGmainInfo">
          <p class="info">Utilitários</p>
          <div class="a0">
            <a href="#">Acessibilidade</a>
            <a href="#">Créditos</a>
          </div>
        </div>
      </div>
    </main>
</body>
</html>