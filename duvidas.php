<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="Author" content="João Marcelo" />
        <meta name="description" content="html5" />
        <link rel="stylesheet" type="text/css" href="style/locadora.css"/>
        <title>Dúvidas</title>
    </head>
    <body>
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
                    </nav>
                    <img src="img/Logo.png">
                </div>
            </header>
            <div class="pesquisa">
                <from>
                    <label>
                        <input type="text" placeholder="Pesquisar..." id ="txtbuscar">
                    </label>
                        <input type="submit" value="Buscar...">
                </from>
            </div>
            <br> </br>
            <br> </br>
            <br> </br>
            <h1>Atenção</h1>
            <h3>Nosso site é 100% compativel com todos os Navegadores.</h3>
            <br> </br>
            <br> </br>
            <br> </br>
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
        </div>
    </body>