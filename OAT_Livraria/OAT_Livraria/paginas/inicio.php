<?php
    if(isset($_POST['busca'])) {
        $nome = "%".trim($_POST['busca'])."%";
        $sth = $conn->prepare('SELECT livros.id, livros.nome, livros.descricao, livros.foto, categorias.nome as categoria_nome FROM livros 
        INNER JOIN categorias ON categorias.id = livros.idcategoria where livros.nome like :nome or livros.descricao like :nome
            or livros.id like :nome or categorias.nome like :nome ORDER BY livros.id DESC ');
        $sth->bindParam(':nome', $nome, PDO::PARAM_STR);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
        $sql = "SELECT livros.id, livros.nome, livros.descricao, livros.foto, categorias.nome as categoria_nome FROM livros 
        INNER JOIN categorias ON categorias.id = livros.idcategoria ORDER BY livros.id DESC";
        $result = $conn->query($sql, PDO::FETCH_ASSOC);
    }
?>

<div class="container">
    <h3 class="center">Livros</h3>
    <form method="POST">
        <div class="row">
            <div class="input-field col s9">
                <input id="busca" name="busca" type="text" class="validate">
                <label for="busca">pesquisar</label>
            </div>
            <div class="col s3">
                <button class="btn deep-purple">pesquisa</button>
            </div>  
        </div>
    </form>
</div>

<div class="container">
        <?php
            foreach($result as $linha){
        ?>
        <div class="row s12 m12 l12 xl12">
            <div class="col s12 m6 l4 xl4">
                <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="<?= $linha['foto'] ?>">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?= $linha['nome'] ?>(<?= $linha['categoria_nome'] ?>)<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><?= $linha['nome'] ?>(<?= $linha['categoria_nome'] ?>)<i class="material-icons right">close</i></span>
                        <p><?= $linha['descricao'] ?></p>
                    </div>
                </div>
            </div>
            <?php
            }
        ?>
        </div>
    <div>
        <a class="btn deep-purple" href="?pg=produto/cadastrar">cadastro</a>
    </div>
</div>