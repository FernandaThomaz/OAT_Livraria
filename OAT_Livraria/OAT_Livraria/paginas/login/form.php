<?php
    if(isset($_SESSION["nome"])){
        header("Location: ?pg=area_restrita");
    }
?>

<div class="container">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="card z-depth-5">
                        <div class="card-content">
                            <h3 class="center">Login</h3>
                            <div class="row">
                                <form class="col s12" method="POST" action="?pg=login/processar">
                                    <div class="row">
                                        <div class="input-field col s12 m12 l12 xl12">
                                            <input id="email" name="email" type="email" class="validate" required>
                                            <label for="email">E-mail:</label>
                                        </div>

                                        <div class="input-field col s12 m12 l12 xl12">
                                            <input id="senha" name="senha" type="password" class="validate" required>
                                            <label for="senha">Senha:</label>
                                        </div>
                                    </div>

                                    <div class="center">
                                        <button class="waves-effect waves-light btn deep-purple" type="submit">ENTRAR</button>
                                    </div>

                                    <div id="format_link_cadastro" class="center">
                                        <span>
                                            Ainda não se cadastrou no sistema?
                                            <a href="?pg=usuario/cadastrar">
                                                cadastrar
                                            </a>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>