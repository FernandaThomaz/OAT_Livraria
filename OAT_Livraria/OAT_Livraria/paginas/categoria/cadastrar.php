<div class="container format_card">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="card z-depth-5">
                        <div class="card-content">
                            <h3 class="center">Nova Categoria</h3>
                            <div class="row">
                                <form class="col s12" method="POST" action="?pg=categoria/processar">
                                    <div class="row">
                                        <div class="input-field col s12 m12 l12 xl12">
                                            <input id="nome" name="nome" type="text" class="validate" required>
                                            <label for="nome">Nome:</label>
                                        </div>

                                        <div class="input-field col s12 m12 l12 xl12">
                                            <input id="descricao" name="descricao" type="text" class="validate" required>
                                            <label for="descricao">Descrição:</label>
                                        </div>
                                    </div>

                                    <div class="center">
                                        <button class="waves-effect waves-light btn deep-purple" type="submit">ENTRAR</button>
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