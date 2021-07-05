<?php

if(!empty($_POST)){
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $cidade = $_POST["cidade"];
    $mensagem = $_POST["mensagem"];

    # Insert no banco de dados
    $stmt = $conn->prepare("INSERT INTO contatos (nome, telefone, email, cidade_id, mensagem) VALUES (:nome, :telefone, :email, :cidade, :mensagem)");

    $bind_param = ["nome" => $nome, "telefone" => $telefone, "email" => $email,"cidade" => $cidade, "mensagem" => $mensagem ];

    try {
        $conn->beginTransaction();
        $stmt->execute($bind_param);
        $conn->commit();
        ?>
        <script>
            setTimeout(function() {
                window.location.href = "?pg=inicio";
            }, 3000);
        </script>
    <?php
    } catch(PDOException $e) {
        $conn->rollback();
        echo '<div class="msg-cadastro-contato msg-cadastro-erro">Erro ao inserir registro no banco: ' . $e->getMessage() . '</div>';
        ?>
        <script>
            setTimeout(function() {
                window.location.href = "?pg=inicio";
            }, 3000);
        </script>
    <?php
    }
}