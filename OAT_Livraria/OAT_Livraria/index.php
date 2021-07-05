<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    require("bd/conexao.php");
    date_default_timezone_set('America/Sao_Paulo');
?>

<html>
    <head>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    </head>

    <body>
        <header>
            <nav class="deep-purple lighten-1">
                <div class="nav-wrapper">
                    <a href="?pg=inicio" class="brand-logo">Livraria</a>
                    <ul class="right hide-on-med-and-down">
                        <?php
                            if(!isset($_SESSION["nome"])){
                        ?>
                            <li><a href="?pg=inicio">Home</a></li>
                            <li><a href="?pg=sobre">Sobre</a></li>
                            <li><a href="?pg=contato/form">Contato</a></li>
                            <li><a href="?pg=login/form">Entrar</a></li>
                        <?php
                            }
                            else{
                        ?>
                            <li><a href="?pg=inicio">Home</a></li>
                            <li><a href="?pg=area_restrita">Area Restrita</a></li>
                            <li><a href="?pg=categoria/cadastrar">Categorias</a></li>
                            <li><a href="?pg=sobre">Sobre</a></li>
                            <li><a href="?pg=contato/form">Contato</a></li>
                            <li><a href="?pg=login/limpar_sessao">Sair</a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <?php
                $pg = (isset($_GET["pg"]) && !empty($_GET["pg"])) ? $_GET["pg"] : "inicio";
                include("paginas/".$pg.".php");
            ?>
        </main>

        <footer class="page-footer deep-purple lighten-1">
            <div class="footer-copyright">
                OAT_Livraria_Fernanda Thomaz Telles de Nogueira Cravo
            </div>
        </footer>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <script src="js/materialize.min.js" defer></script>
        <script>
            $(document).ready(function(){
                $('select').formSelect();
            }); 
        </script>
    </body>
</html>