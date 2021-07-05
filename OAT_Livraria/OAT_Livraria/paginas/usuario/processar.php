<?php

    if(!empty($_POST)){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $senha = $_POST["senha"];
        $data_hora_cadastro = date('Y-m-d H:i:s');

        # Insert no banco de dados
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, telefone, senha, data_hora_cadastro) VALUES (:nome, :email, :telefone, :senha, :data_hora_cadastro)");
        
        $bind_param = ["nome" => $nome, "email" => $email,"telefone" => $telefone,"senha" => md5($senha),"data_hora_cadastro" => $data_hora_cadastro ];

        try {
            $conn->beginTransaction();
            $stmt->execute($bind_param);
            echo '<div class="msg-cadastro-contato msg-cadastro-sucesso">Usuário inserido no banco!</div>';
            $conn->commit();
        } catch(PDOException $e) {
            $conn->rollback();
            echo '<div class="msg-cadastro-contato msg-cadastro-erro">Não foi possível cadastrar o usuário -> ' . $e->getMessage() . '</div>';
        }
    }

?>
<div id="btn-limpar-sessao">
    <a href="?pg=inicio">Voltar</a>
</div>