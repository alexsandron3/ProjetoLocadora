<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="Author" content="Ivone Guedes" />
    <meta name="description" content="html5" />

    <!-- renderização e o zoom de toque adequados -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- carregar arquivos necessários -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="style/locadora.css" />

    <title>Catálogo</title>

</head>
<body>
    <!-- contêiner de largura fixa responsivo -->
    <div class="container p-3 my-3 text-white">
        <!-- container-fluid para largura total -->

        <div id="pagina">
            <header>
                <div class="logo">
                <?php 
                            session_start();
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
                            echo"<nav class='navbar'>";
                                echo"<ul>";
                                    echo"<li><a href='index.php'>Início</a></li>";
                                    echo"<li><a href='catalogo.php'>Catálogo</a></li>";
                                    echo"<li><a href='duvidas.php'>Dúvidas</a></li>";
                                    echo"<li><a href='minhaconta.php'> Minha Conta </a></li>";
                                    echo"<li><a href='PHP/logout.php'>Sair</a></li>";
                                echo"</ul>";
                            echo"</nav>";
                        }
                    ?>
                    <img src="./img/logo.png" alt="">
                </div>
            </header>

            <div class="pesquisa">
                <form>
                    <label>
                        <input type="text" placeholder="Pesquisar 🌎" id ="txtbuscar">
                    </label>
                        <input class="bnt_buscar"type="submit" value="Buscar 🔎">
                </form>
            </div>
            <br> </br>
            <br> </br>
            <br> </br>
            
            <div class="filmes">
                <a href="hp1.php">
                    <img src="./img/IMGHP1.jpg" alt="">Harry Potter P. Filosofal
                </a>
                <a href="hp2.php">
                    <img src="./img/IMGHP2.jpg" alt="">Harry Potter Ord. Fênix
                </a>
                <a href="AnimaisFantasticos1.php">
                    <img src="./img/AF1.jpg" alt="">Animais Fantásticos Habitam
                </a>
                <a href="AnimaisFantasticos2.php">
                    <img src="./img/AF2.jpg" alt="">Animais Fantásticos Os Crimes
                </a>
                <br>
                <a href="vingadores.php">
                    <img src="./img/Vingadores.jpg" alt="">Vingadores
                </a>
                <a href="vingadoresUltimato.php">
                    <img src="./img/VingadoresUltimato.jpg" alt="">Vingadores Ultimato
                </a>
                <a href="velozesFuriosos.php">
                    <img src="./img/VelozesFuriosos.jpg">Velozes e Furiosos
                </a>
                <a href="reiLeao.php">
                    <img src="./img/ReiLeao.jpg">Rei'Leão
                </a>
            </div>

            <!-- Rodapé -->
            <div class="footer">
                <footer>
                    <nav class="menu-footer">
                        <ul>
                            <li><a href="contato.php">Contato</a></li>
                            <li><a href="termodeuso.php">Termo de Uso</a></li>
                            <li><a href="seguranca.php">Segurança</a></li>
                        </ul>
                    </nav>
                    <div class="social-midias">
                        <a href="https://github.com/alexsandron3/ProjetoLocadora">
                            <img src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/64/social_media_logo_github-512.png" alt="">
                        </a>
                        <a href="#">
                            <img src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/online_social_media_facebook-512.png" alt="">
                        </a>
                        <a href="#">
                            <img src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/instagram_online_social_media_photo-512.png" alt="">
                        </a>
                        <a href="#">
                            <img src="https://cdn2.iconfinder.com/data/icons/black-white-social-media/32/youtube_online_social_media_tube-512.png" alt="">
                        </a>
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
        </div>

    </div>

</body>
</html>