<?php
#Modificado por Miguel Luiz Sommerfeld às 15:17 no dia 11/05/2025 - Team Leader (Turma B) 
require_once 'connect.php';
session_start();

$tipo = $_POST['tipo'] ?? $_GET['tipo'] ?? '';
$valor = $_POST['valor'] ?? $_GET['valor'] ?? '';

if ($tipo === 'local') {
    $_SESSION['local'] = $valor;
    unset($_SESSION['sala']); // limpa sala anterior
    echo 'ok';
    exit;
}

if ($tipo === 'sala') {
    $_SESSION['sala'] = $valor;
    echo 'ok';
    exit;
}

if ($tipo === 'salas') {
    $local = $_SESSION['local'] ?? '';
    if (in_array($local, ['Bloco A', 'Bloco B'])) {
        for ($i = 1; $i <= 8; $i++) {
            echo "<button data-sala='Sala $i'>Sala $i</button><br>";
        }
    } elseif ($local === 'Patio') {
        for ($i = 1; $i <= 7; $i++) {
            echo "<button data-sala='Pátio $i'>Pátio $i</button><br>";
        }
    } elseif (in_array($local, ['Biblioteca', 'Auditorio', 'Quadra'])) {
        echo "<button data-sala='$local'>$local</button><br>";
    }
    exit;
}

if ($tipo === 'stands') {
    $local = $_SESSION['local'] ?? '';
    $sala = $_SESSION['sala'] ?? $local; // se sala não foi escolhida, usa o próprio local

    //Adicionando Prepared Statements, e prevenindo SQL Injection
    $query = "SELECT posicao, nome_stand FROM stand WHERE bloco = (?) AND sala = (?)";
    $stmt = $mysqli->prepare($query);
    
    if (!$stmt) {
        echo "Erro ao buscar stands.";
        exit;
    } else {
        $stmt->bind_param("ss", $local, $sala);
        $stmt->execute();

        $result = $stmt->get_result();
        $stmt->close();   
    }

    $stands = [];
    while ($row = $result->fetch_assoc()) {
        $stands[$row['posicao']] = $row['nome_stand'];
    }

    $max = 8;
    if ($local === 'Patio') $max = 7;
    if (in_array($local, ['Biblioteca', 'Auditorio', 'Quadra'])) $max = 16;

    for ($i = 1; $i <= $max; $i++) {
        $nome = $stands[$i] ?? 'Stand vazio';
        echo "<div><h3>Stand $i</h3><p>$nome</p></div>";
    }

    exit;
}
?>