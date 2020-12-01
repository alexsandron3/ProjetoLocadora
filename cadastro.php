﻿<?php
    session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style/locadora.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"
    integrity="sha256-yE5LLp5HSQ/z+hJeCqkz9hdjNkk1jaiGG0tDCraumnA=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div id="pagina">
        <header>
            <div class="logo">
                 <nav class="navbar">
                     <ul>
                         <li><a href="index.php">Início</a></li>
                         <li><a href="catalogo.php">Catálogo</a></li>
                         <li><a href="duvidas.php">Dúvidas</a></li>
                         <li><a href="login.php">Entrar</a></li>
                         <li><a href="cadastro.php">Registar</a></li>
                     </ul>
                 </nav>
                 <img src="img/Logo.png">
             </div>
         </header>
        <div class="formContentCadastro">
            <form action="PHP/cadastrarUsuario.php" method="POST" autocomplete="OFF">
                <img class="Logo_site" src="img/Logo.png">
                <h1>REGISTRAR</h1>
                <label for="nome"></label><br/>
                <input type="text" class="inputForm" name="nome" placeholder="NOME COMPLETO" onkeydown="upperCaseF(this)" required> <br/>

                <label for="usuario"></label><br/>
                <input type="text" class="inputForm" name="usuario" placeholder="USUARIO" onkeydown="upperCaseF(this)" required> <br/>

                <label for="cpfCliente"></label><br/>
                <input type="text" class="inputForm" name="cpfCliente" placeholder="CPF" id="cpfCliente" onkeydown="upperCaseF(this)" required> <br/>

                <label for="email"></label>
                <input type="email" class="inputForm" name="email" placeholder="EMAIL" required> <br/>
                
                <label for="senha"></label>
                <input type="password" class="inputForm" name="senha" placeholder="SENHA" required><br/>

                <label for="telefoneCliente"></label>
                <input type="text" class="inputForm" name="telefoneCliente" id="telefoneCliente" placeholder="TELEFONE"><br/>

                <label for="dataNascimento"></label>
                <input type="date" class="inputForm" name="dataNascimento" id="dataNascimento" onblur="ageCount()" required><br/>
                
                    <button type="submit" value="CADASTRAR" class="cadastrarButton">CADASTRAR </button>
                
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
<script src="js/javascript.php"></script>

</html>