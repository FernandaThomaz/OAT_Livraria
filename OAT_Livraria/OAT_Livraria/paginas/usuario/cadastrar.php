<div class="container">
    <div class="container">
            <div class="row">
                <div class="col s12">
                    <h3 class="center">usuario</h3>
                    <div class="row">
                        <form class="col s12" method="POST" action="?pg=usuario/processar">
                            <div class="row">
                                <div class="input-field col s12 m12 l12 xl12">
                                    <input id="nome" name="nome" type="text" class="validate" required/>
                                    <label for="nome">Nome:</label>
                                </div>

                                <div class="input-field col s12 m12 l12 xl12">
                                    <input id="email" name="email" type="email" class="validate" required>
                                    <label for="email">E-mail:</label>
                                </div>

                                <div class="input-field col s12 m12 l12 xl12">
                                    <input id="telefone" name="telefone" type="text" class="validate" required/>
                                    <label for="telefone">Telefone:</label>
                                </div>

                                <div class="input-field col s12 m12 l12 xl12">
                                    <input id="senha" name="senha" type="password" class="validate" required>
                                    <label for="senha">Senha:</label>
                                </div>
                            </div>

                            <div class="center">
                                <a href="?pg=login/form" class="waves-effect waves-light btn deep-purple">VOLTAR</a>
                                <button class="waves-effect waves-light btn deep-purple" type="submit">SALVAR</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
