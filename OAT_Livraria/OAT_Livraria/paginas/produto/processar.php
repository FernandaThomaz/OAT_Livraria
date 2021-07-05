<?php

if(!empty($_POST)){
    
    $descricao = $_POST["descricao"];
    $nome = $_POST["nome"];
    $imagem = $_POST["imagem"];
    $categoria = $_POST["categoria"];
    $data_hora_cadastro = date('Y-m-d H:i:s');
   
    $stmt = $conn->prepare("INSERT INTO livros (nome, descricao, foto, idcategoria, data_hora_cadastro) 
    VALUES (:nome, :descricao, :imagem, :idcategoria, :data_hora_cadastro)");
   
    $bind_param = [
        "nome" => $nome, 
        "descricao" => $descricao, 
        "imagem" => $imagem, 
        "idcategoria" => $categoria,
        "data_hora_cadastro" => $data_hora_cadastro
    ];
    
    try {
        $conn->beginTransaction();
        $stmt->execute($bind_param);
        $last_id = $conn->lastInsertId();
        echo '<div class="msg-cadastro-contato msg-cadastro-sucesso">Registro ' . $last_id . ' inserido no banco!</div>';
        $conn->commit();
    } catch(PDOExecption $e) {
        $conn->rollback();
        echo '<div class="msg-cadastro-contato msg-cadastro-erro">Erro ao inserir registro no banco: ' . $e->getMessage() . '</div>';
    }

}

?>

<div id="btn-limpar-sessao">
    <a href="?pg=itens/cadastrar_itens">Voltar</a>
</div>