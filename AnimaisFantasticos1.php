<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="style/locadora.css"/>
        <meta charset="utf-8"/>
        <meta name= "description" content="Sinopse do Filme Animais Fantásticos e Onde Habitam "/>
        <meta name= "keywords" content="Filme,Locadora,Animais Fantásticos,descrição"/>
        <meta name ="author" content="Os Sem Nome"/>
        <title>Animais Fantásticos e Onde Habitam</title>
    </head>
    <body>
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
       </header>
            <img class="Logo_site" src="img/Logo.png">
            <br> </br>
            <figure>
                <figcaption> <h3><strong>Animais Fantásticos e Onde Habitam </strong></h3></figcaption>
                    <div class="informacoes_filme">
                        <p> Diretor: David Yates</p>
                        <p> Elenco: Eddie Redmayne, Katherine Waterston, Dan Fogler</p>
                        <P> Origem: Reino Unido / EUA</P>
                        <p> Ano: 2016</p>
                        <p> Sinopse: O excêntrico magizoologista Newt Scamander (Eddie Redmayne) chega 
                            à cidade de Nova York levando com muito zelo sua preciosa maleta, um objeto
                            mágico onde ele carrega fantásticos animais do mundo da magia que coletou 
                            durante as suas viagens. Em meio a comunidade bruxa norte-americana, que 
                            teme muito mais a exposição aos trouxas do que seus colegas ingleses, Newt
                            precisará usar todas suas habilidades e conhecimentos para capturar uma 
                            ariedade de criaturas que acabam fugindo.</p> 
                            <div class="btn-local">
                                <li><a href = "FnzCompra.php"><button class="btn_compra">Comprar</button>
                            </div>
                    </div>              
                    <img class="Capa_FILME" src="img/AF1.jpg" alt="Animais Fantásticos e Onde Habitam"  >     
            </figure>
                <iframe class="Video_FILME"
                src="https://www.youtube.com/embed/TiaxfJ7QrIo">
                </iframe>
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
    </body>
</html>