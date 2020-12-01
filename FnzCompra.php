<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="style/locadora.css"/>
        <meta charset="utf-8"/>
        <meta name= "description" content="Sinopse do Filme Animais Fantásticos e Onde Habitam "/>
        <meta name= "keywords" content="Filme,Locadora,Animais Fantásticos,descrição"/>
        <meta name ="author" content="Os Sem Nome"/>
        <title>Compras</title>
    </head>
    <body>
        <header>
        <?php 
                            session_start();
                            include_once("PHP/conexao.php");
                            if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
                            {
                            unset($_SESSION['email']);
                            unset($_SESSION['senha']);
                            echo"<nav class='navbar'>";
                                echo"<ul>";
                                    echo"<li><a href='index.php'>Início</a></li>";
                                    echo"<li><a href='catalogo.php'>Catálogo</a></li>";
                                    echo"<li><a href='duvidas.php'>Dúvidas</a></li>";
                                    echo"<li><a href='login.php'> Entrar </a></li>";
                                    echo"<li><a href='cadastro.php'>Registrar</a></li>";
                                echo"</ul>";
                            echo"</nav>";    
                                
                            }else{
                                $email = $_SESSION['email'];
                                $senha = $_SESSION['senha'];
                            echo"<nav class='navbar'>";
                                echo"<ul>";
                                    echo"<li><a href='index.php'>Início</a></li>";
                                    echo"<li><a href='catalogo.php'>Catálogo</a></li>";
                                    echo"<li><a href='duvidas.php'>Dúvidas</a></li>";
                                    echo"<li><a href='minhaconta.php'> Minha Conta </a></li>";
                                    echo"<li><a href='PHP/logout.php'>Sair</a></li>";
                                echo"</ul>";
                            echo"</nav>";
                    $queryBuscaInformacoes = "SELECT * FROM usuarios WHERE emailUsuario='$email' AND senhaUsuario='$senha'";
                    $resultadoBuscaInformacoes = mysqli_query($conexao, $queryBuscaInformacoes);
                    $rowBuscaInformacoes = mysqli_fetch_assoc($resultadoBuscaInformacoes);
                    $idUsuario = $rowBuscaInformacoes['idUsuario'];
                    
                    
                        }
                    ?>
        </header>
        <img class="Logo_site" src="img/Logo.png">
        <br> </br>
        <?php

            $idFilme = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            include_once("PHP/conexao.php");
            $queryBuscaFilmes = "SELECT * FROM filmes WHERE idFilme=$idFilme";
            $resultadoBuscaFilmes = mysqli_query($conexao, $queryBuscaFilmes);
            while ($rowBuscaFilmes = mysqli_fetch_assoc($resultadoBuscaFilmes)){

        ?>
        <div class="compra-filme">
            <figcaption> <h3><strong><?php echo $rowBuscaFilmes['nomeFilme'];?></strong></h3></figcaption>             
            <img src="<?php echo $rowBuscaFilmes['linkImgFilme'];?>" alt="Animais Fantásticos e Onde Habitam"  >
            <h3><strong>R$: <?php echo $rowBuscaFilmes['precoFilme'];?><strong></h3>
            <div class="btn-local">
            <a href="PHP/finalizarPagamento.php?idCliente=<?php echo $idUsuario; ?>&idFilme=<?php echo $rowBuscaFilmes ['idFIlme'];?>"><button class="btn-verde">Finalizar Compra </button>
            </div> 
                <a href="index.php"><button class="btn-vermelho">Cancelar Compra </button>
        </div>
        <?php
            }
        ?>
        <div class="footer">
            <footer>
                <nav class="menu-footer">
                    <ul>
                        <li><a href="termodeuso.php">Termos de Uso</a></li>
                        <li><a href="seguranca.php">Segurança</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                </nav>
                <div class="social-midias">
                    <a href="https://github.com/alexsandron3/ProjetoLocadora"><img src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/64/social_media_logo_github-512.png"></a>
                    <a href="#"><img src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/online_social_media_facebook-512.png"></a>
                    <a href="#"><img src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/instagram_online_social_media_photo-512.png"></a>
                    <a href="#"><img src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/youtube_online_social_media_tube-512.png"></a>
                </div>
                <hr>
                <div id="matricula">
                    <p>João Marcelo (202002410841)</p>
                    <p>Alexsandro Xavier (202002411023)</p>
                    <p>Gabriel Miranda (202002410906)</p>
                    <p>Ivone Guedes (202001084207)</p>
                </div>
            </footer>
        </div>
     </body>
</html>