<?php
require_once '../config/connect.php';

session_start();
//Chama o banco, verifica o método de requisição, muda a nota para inteiro e insere os dados no banco.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_SESSION['id'])) {
        echo "<script>
            alert('Não está logado.');
            window.history.back();
        </script>";
        exit();
    } else {
        $id = $_SESSION['id'];
    }
    
    $nota = isset($_POST['nota']) ? (int)$_POST['nota'] : null;

    if ($nota < 1 || $nota > 5) {
        echo "<script>
            alert('Nota inválida.');
            window.history.back();
        </script>";
        exit();
    }

    $comentario = isset($_POST['comentario']) ? $_POST['comentario'] : null;
    $comentario = trim($comentario) === '' ? null : $comentario;

    //Verifica se o usuário já enviou um comentário ou nota
    $select = "SELECT id_feedback FROM tb_feedback WHERE id_users = ?";
    $stmt = $mysqli->prepare($select);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->close();
        $mysqli->close();
        echo "<script>
            alert('Você já enviou um feedback.');
            window.history.back();
        </script>";
        exit();
    }

    $query = "INSERT INTO tb_feedback (id_users, nota, comentario) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    if ($stmt) {
        $stmt->bind_param("iis", $id, $nota, $comentario);
        if ($stmt->execute()) {
            $stmt->close();
            $mysqli->close();
            echo "<script>
                alert('Comentário enviado!');
                window.history.back();
            </script>";
        } else {
            $stmt->close();
            $mysqli->close();
            echo "<script>
                alert('Erro ao enviar comentário.');
                window.history.back();
            </script>";
        }
    }
}
?>