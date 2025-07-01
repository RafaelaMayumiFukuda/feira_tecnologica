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
          <a href="views/tela_home.php"><button>Entrar sem conta</button></a>
          <a href=views/tela_login.php><button>Entrar</button></a>
        </div>
        <div class="ORGmainInfo">
          <p class="info">Informativo</p>
          <button>Etec - MCM</button>
          <button>Vestibulinho</button>
        </div>
        <div class="ORGmainInfo">
          <p class="info">Utilitários</p>
          <button>Acessibilidade</button>
          <button>Créditos</button>
        </div>
      </div>
    </main>
</body>
</html>