<?php
    $sqlCidades = "SELECT c.id, c.nome, e.sigla AS sigla_estado FROM cidades c INNER JOIN estados e ON e.id = c.estado_id";
    $resultCidades = $conn->query($sqlCidades, PDO::FETCH_ASSOC);
?>

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <h3 class="center">Formulário de Contato</h3>
                        <div class="row">
                            <form class="col s12" method="POST" action="?pg=contato/processar">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="nome" name="nome" type="text" class="validate" required>
                                        <label for="nome">Nome:</label>
                                    </div>

                                    <div class="input-field col s12">
                                        <input id="email" name="email"  type="email" class="validate" required>
                                        <label for="email">E-mail:</label>
                                    </div>

                                    <div name="cidade" class="input-field col s12">
                                        <select name="cidade" required>
                                            <option value="" disabled selected>Selecione uma opção...</option>
                                            <?php
                                                while($linha = $resultCidades->fetch()){
                                            ?>
                                                <option value="<?= $linha["id"] ?>"><?= $linha["nome"] ?>(<?= $linha["sigla_estado"] ?>)</option>
                                            <?php 
                                                } 
                                            ?>
                                        </select>
                                    </div>

                                    <div class="input-field col s12">
                                        <input id="telefone" name="telefone"  type="text" class="validate" required>
                                        <label for="telefone">Telefone:</label>
                                    </div>

                                    <div class="input-field col s12 m12 l12 xl12">
                                        <textarea id="messagem" name="mensagem" class="materialize-textarea" required></textarea>
                                        <label for="mensagem">Mensagem:</label>
                                    </div>
                                </div>
                                
                                <div class="center">
                                    <button class="waves-effect waves-light btn deep-purple" type="submit">ENVIAR</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>