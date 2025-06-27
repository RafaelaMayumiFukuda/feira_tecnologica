<?php
$filtroProjetos = isset($_POST['filtroProjetos']);
if ($filtroProjetos == 1) {
    header('Location: tela_filtro.php');
} else {
    session_start();
}

require_once '../back/connect.php';

$query = "SELECT DISTINCT a.serie, a.curso, p.id_projetos, p.titulo_projeto, p.descricao_projeto,
          p.bloco, p.sala, p.stand, p.prof_orientador
          FROM tbl_projetos AS p
          INNER JOIN tb_integrantes AS i ON p.id_projetos = i.id_projetos
          INNER JOIN tbl_alunos AS a ON a.id_aluno = i.id_aluno
          INNER JOIN ods_projeto AS op ON op.id_projetos = p.id_projetos
          INNER JOIN tbl_ods AS o ON o.id_ods = op.id_ods";
$result = $mysqli->execute_query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJETOS</title>
</head>
<body>
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

                $queryOds = "SELECT ods FROM ods_projeto AS op
                            INNER JOIN tbl_projetos as p ON op.id_projetos = p.id_projetos
                            INNER JOIN tbl_ods AS o ON o.id_ods = op.id_ods
                WHERE op.id_projetos = ?";
                $stmtOds = $mysqli->prepare($queryOds);
                $stmtOds->bind_param("i", $row['id_projetos']);
                $stmtOds->execute();
                $resultOds = $stmtOds->get_result();
            ?>
            <div>
                <form action="../back/avaliacao.php" method="post">
                    <input type="hidden" name="id_projeto" value='<?= $row['id_projetos'] ?>'>
                    <label><?= $row['id_projetos'] ?></label>
                    <label><?= $row['titulo_projeto'] ?></label><br>
                    <label><?php
                        while ($rowAluno = $resultAlunos->fetch_assoc()) {
                            $aluno = $rowAluno['nome'];
                            echo htmlspecialchars($aluno) . "; ";
                        }
                    ?></label><br>
                    <label><?php
                        while ($rowOds = $resultOds->fetch_assoc()) {
                            $ods = $rowOds['ods'];
                            echo htmlspecialchars($ods) . "; ";
                        }
                    ?></label><br>
                    <label><?= $row['curso'] ?></label><br>
                    <select name="estrelas" required>
                        <option value="" disabled selected>Selecione</option>
                        <option value="5">⭐⭐⭐⭐⭐</option>
                        <option value="4">⭐⭐⭐⭐</option>
                        <option value="3">⭐⭐⭐</option>
                        <option value="2">⭐⭐</option>
                        <option value="1">⭐</option>
                    </select>
                    <br>
                    <button type="submit">ENVIAR</button>
                    <br><br><br>
                </form>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
</body>
</html>