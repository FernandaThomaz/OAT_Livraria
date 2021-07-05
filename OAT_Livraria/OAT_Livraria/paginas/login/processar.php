<?php

if(!empty($_POST)){
    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    $sql = "SELECT us.id, us.nome, us.email, us.telefone
    FROM usuarios us
    WHERE us.email = '".$email."' and senha = '".$senha."'";
    $result = $conn->query($sql, PDO::FETCH_ASSOC);
    if($info = $result->fetch()){
        $_SESSION["nome"]=$info['nome'];
        $_SESSION["email"]=$info['email'];
        $_SESSION["telefone"]=$info['telefone'];
        $_SESSION["id"] = $info['id'];
        header("Location: ?pg=area_restrita");
    }else{
        echo '<div class="box_erro_login"><p><i class="fas fa-exclamation-circle"></i> Usuário não encontrado.</p></div>';
    }
}
else{
    header("Location: ?pg=login/form");
}
?>
