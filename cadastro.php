<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/locadora.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="pagina">
        <header>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="catalogo.php">Catálogo</a></li>
                    <li><a href="duvidas.php">Dúvidas</a></li>
                    <li><a href="login.php">Entrar</a></li>
                    <li><a href="cadastro.php">Registrar</a></li>
                </ul>
            </nav>
            <img class="Logo_site" src="img/Logo.png">
        </header>
        
        
        <div class="formContentCadastro">
            <form action="#">
                <img class="Logo_site" src="img/Logo.png">
                <h1>REGISTRAR</h1>
                <label for="nome"></label><br/>
                <input type="text" class="inputForm" name="nome" placeholder="NOME" required> <br/>

                <label for="email"></label>
                <input type="email" class="inputForm" name="email" placeholder="EMAIL" required> <br/>
                
                <label for="senha"></label>
                <input type="password" class="inputForm" name="senha" placeholder="SENHA"><br/>

                <label for="dataNascimento"></label>
                <input type="date" class="inputForm" name="dataNascimento"><br/>
                
                
                <form action="" class="cadastrarButton">
                    <input type="button" value="CADASTRAR" class="cadastrarButton">
                </form>
                <p>Já tem uma conta? clique <a href="cadastro.php">AQUI</a> </p>
    
            </form>
        </div>
        <div class="footer">
            <footer>
                <nav class="menu-footer">
                    <ul>
                        <li><a href="contato.php">Contato</a></li>
                        <li><a href="termodeuso.php">Termos de Uso</a></li>
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
</html>