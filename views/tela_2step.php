<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de dois fatores</title>
</head>
<body>
    <?php if (isset($_SESSION['redefine'])): ?>
        <form action="../back/redefinir.php" method="post">
            <h3>Digite a sua nova senha</h3>
            <label>Senha</label>
            <input type="text" name="novaSenha" required>
            <button type="submit">Enviar</button>
        </form>
    <?php elseif (!isset($_SESSION['email'])): ?>
        <form action="../back/verificacao_dois_fatores.php" method="post">
            <h3>Digite o seu endereço de e-mail</h3>
            <label>E-mail</label>
            <input type="text" name="email" required>
            <button type="submit">Enviar</button>
        </form>
    <?php else: ?>
        <form action="../back/verificacao_dois_fatores.php" method="post">
            <h3>Digite o código que foi enviado no seu E-mail</h3>
            <label>Código</label>
            <input type="text" name="codigo" minlength="6" maxlength="6" required>
            <button type="submit">Enviar</button>
        </form>
    <?php endif; ?>
</body>
</html>