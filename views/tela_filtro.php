<?php
#Modificado por Miguel Luiz Sommerfeld às 02:06 no dia 09/06/2025 - Team Leader (Turma B)
require_once '../back/connect.php';

// Arrays para os selects
$blocos = ['A', 'B'];

// Captura os filtros
$filtroTitulo = trim($_GET['titulo'] ?? null);
$filtroNome = trim($_GET['nome'] ?? null);
$filtroCurso = trim($_GET['curso'] ?? null);
$filtroSerie = trim($_GET['serie'] ?? null);
$filtroOds = trim($_GET['ods'] ?? null);
$filtroBloco = trim($_GET['bloco'] ?? null);

// Query com filtros
$query = "SELECT DISTINCT a.serie, a.curso, p.id_projetos, p.titulo_projeto, p.descricao_projeto,
          p.ods, p.bloco, p.sala, p.stand, p.prof_orientador
          FROM tbl_projetos AS p
          INNER JOIN tb_integrantes AS i ON p.id_projetos = i.id_projetos
          INNER JOIN tbl_alunos AS a ON a.id_aluno = i.id_aluno";

$params = [];
$types = "";

if ($filtroNome) {
    $query .= " AND a.nome LIKE ?";
    $params[] .= "%" . $filtroNome . "%";
    $types .= "s";
}

if ($filtroCurso) {
    $query .= " AND a.curso = ?";
    $params[] .= $filtroCurso;
    $types .= "s";
}

if ($filtroSerie) {
    $query .= " AND a.serie = ?";
    $params[] .= $filtroSerie;
    $types .= "s";
}

if ($filtroOds) {
    $query .= " AND p.ods LIKE ?";
    $params[] .= "%" . $filtroOds . "%";
    $types .= "s";
}

if ($filtroBloco) {
    $query .= " AND p.bloco = ?";
    $params[] .= $filtroBloco;
    $types .= "s";
}

$stmt = $mysqli->prepare($query);

if ($params) {
    $stmt->bind_param($types, ...$params); // '...' o splat operator ou argument unpacking transforma um array em multiplos argumentos individuais, assim permite que eu passe um array como argumento na função bind_param()
}

$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/filtro.css">
    <title>Filtro de Trabalhos</title>
</head>
<body>
    <div class="container">
        <h1>Filtrar Trabalhos</h1>
        <form method="GET">
            <div>
                <label>Curso:</label>
                <select name="curso">
                    <option value="">Todos</option>
                        <?php
                        $queryCurso = "SELECT DISTINCT curso FROM tbl_alunos";
                        $resultCurso = $mysqli->query($queryCurso);
                        
                        while ($row = $resultCurso->fetch_assoc()):
                            $curso = $row['curso'];
                        ?>

                        <option value="<?= $curso ?>" <?= $filtroCurso == $curso ? 'selected' : '' ?>>
                            <?= strtoupper($curso) ?>
                        </option>
                        
                        <?php endwhile; ?>
                </select>
            </div>

            <div>
                <label>Série:</label>
                <select name="serie">
                    <option value="">Todas</option>
                        <?php
                        $querySerie = "SELECT DISTINCT serie FROM tbl_alunos";
                        $resultSerie = $mysqli->query($querySerie);

                        while ($row = $resultSerie->fetch_assoc()):
                            $serie = $row['serie'];
                        ?>

                        <option value="<?= $serie ?>" <?= $filtroSerie == $serie ? 'selected' : '' ?>>
                            <?= strtoupper($serie) ?>
                        </option>
                        <?php endwhile; ?>
                </select>
            </div>

            <div>
                <label>Bloco:</label>
                <select name="bloco">
                    <option value="">Todos</option>
                    <?php foreach ($blocos as $bloco): ?>
                        <option value="<?= $bloco ?>" <?= $filtroBloco == $bloco ? 'selected' : '' ?>>
                            <?= $bloco ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div>
                <label>Nome do Aluno:</label>
                <input type="text" name="nome" value="<?= htmlspecialchars($filtroNome ?? null) ?>">
            </div>

            <div style="grid-column: span 2;">
                <label>Tema (ODS):</label>
                <input type="text" name="ods" value="<?= htmlspecialchars($filtroOds) ?>">
            </div>
            <button type="submit">Filtrar</button>
        </form>

        <h2>Resultados: <?=$result->num_rows?></h2>
        <?php
        if ($result->num_rows > 0) :
            while ($row = $result->fetch_assoc()) :
                $queryAluno = "SELECT nome FROM tb_integrantes as i
                            INNER JOIN tbl_projetos AS p ON p.id_projetos = i.id_projetos
                            INNER JOIN tbl_alunos as a ON a.id_aluno = i.id_aluno
                            WHERE i.id_projetos = ?";
                $stmt = $mysqli->prepare($queryAluno);
                $stmt->bind_param("i", $row['id_projetos']);
                $stmt->execute();
                $resultAlunos = $stmt->get_result();
        ?>
            <div class="card">
                <h3><?= $row['titulo_projeto'] ?></h3>
                <p><strong>Curso:</strong> <?= strtoupper($row['curso']) ?></p>
                <p><strong>Série:</strong> <?= ucfirst($row['serie']) ?></p>
                <p><strong>Bloco:</strong> <?= $row['bloco'] ?></p>
                <p><strong>Aluno:</strong> <?php
                    while ($rowAluno = $resultAlunos->fetch_assoc()) {
                        $aluno = $rowAluno['nome'];
                        echo $aluno . "; ";
                    }
                ?></p>
                <p><strong>ODS:</strong> <?= htmlspecialchars($row['ods']) ?></p>
                <p><strong>Orientador:</strong> <?= htmlspecialchars($row['prof_orientador']) ?></p>
                <p><strong>Posição no Ranking:</strong> <?= $row['posicao'] ?? '?' ?></p>
            </div>
        <?php endwhile; ?>
        <?php else: ?>
            <p>Nenhum trabalho encontrado com os filtros selecionados.</p>
        <?php endif; ?>
    </div>
</body>
</html>