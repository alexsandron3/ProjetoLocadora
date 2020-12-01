<?php
include_once("conexao.php");
session_start();


$email           = filter_input(INPUT_POST, 'email',            FILTER_SANITIZE_EMAIL); 
$senha           = filter_input(INPUT_POST, 'senha',            FILTER_SANITIZE_STRING); 



$queryVerificaSeExisteUsuario = "SELECT emailUsuario, senhaUsuario  FROM usuarios WHERE  emailUsuario='$email' AND senhaUsuario='$senha'";
                                $resultadoVerificaUsuario = mysqli_query($conexao,$queryVerificaSeExisteUsuario);
                                $rowVerificaUsuario = mysqli_fetch_assoc($resultadoVerificaUsuario);

if(mysqli_num_rows($resultadoVerificaUsuario) > 0){
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    echo '<!DOCTYPE html>';
   echo '<html xmlns="http://www.w3.org/1999/xhtml">';
   echo '<head>';
   echo '   <meta http-equiv="refresh" content="50;  url=../index.php">';
   echo '</head>';
   echo '<body>';
   echo '<p>LOGADO COM SUCESSO, REDIRECIONANDO PARA PÁGINA DE COMPRAS</p>';
   echo '<a href="../index.php">Prosseguir</a>';
   echo '</body>';
   echo '</html>';
}else{
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    echo '<!DOCTYPE html>';
   echo '<html xmlns="http://www.w3.org/1999/xhtml">';
   echo '<head>';
   echo '   <meta http-equiv="refresh" content="50;  url=../login.php">';
   echo '</head>';
   echo '<body>';
   echo '<p>USUÁRIO OU SENHA INCORRETOS, REDIRECIONANDO PARA ÁREA DE LOGIN'. $email .'</p>';
   echo '<a href="../login.php">Prosseguir</a>';
   echo '</body>';
   echo '</html>';
    
}





?>