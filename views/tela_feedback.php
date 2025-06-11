<?php
  session_start();
  if (!isset($_SESSION['id'])) {
      echo "<script>
        alert('Você precisa estar logado para nos avaliar.');
        window.history.back();
      </script>";
      exit();
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/feedback.css">
  <title>Feedback</title>
</head>
<body>
<a href="tela_home.php" class="voltar">Voltar</a>
  <div class="feedback-form">
    <h2>Envie seu Feedback</h2>
    
    <form id="form" action="../back/feedback.php" method="POST">
      <label for="nota">Avaliação:</label>
      <select id="nota" name="nota" required>
        <option value="" disabled selected>Selecione</option>
        <option value="5">⭐⭐⭐⭐⭐</option>
        <option value="4">⭐⭐⭐⭐</option>
        <option value="3">⭐⭐⭐</option>
        <option value="2">⭐⭐</option>
        <option value="1">⭐</option>
      </select>

      <label for="comentario">Comentário:</label>
      <textarea id="comentario" name="comentario" rows="4"></textarea>

      <button type="submit">Enviar</button>
    </form> 
  </div>
</body>
</html>