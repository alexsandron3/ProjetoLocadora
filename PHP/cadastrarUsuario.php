<?php
session_start();
include_once("conexao.php");
$nomeCompleto           = filter_input(INPUT_POST, 'nome',      FILTER_SANITIZE_STRING); 
$nomeUsuario            = filter_input(INPUT_POST, 'usuario',   FILTER_SANITIZE_STRING);  
$cpfCliente             = filter_input(INPUT_POST, 'cpfCliente',FILTER_SANITIZE_STRING); 
$email                  = filter_input(INPUT_POST, 'email',          FILTER_SANITIZE_STRING); 
$senha                  = filter_input(INPUT_POST, 'senha',          FILTER_SANITIZE_STRING); 
$telefone               = filter_input(INPUT_POST, 'telefoneCliente',FILTER_SANITIZE_STRING); 
$dataNascimento         = filter_input(INPUT_POST, 'dataNascimento', FILTER_SANITIZE_STRING); 




$getData         = "INSERT INTO 
                    usuarios (nomeCompleto, nomeUsuario, cpfusuario, emailUsuario, senhaUsuario, telefoneUsuario, dataNascimento)
                    VALUES   ('$nomeCompleto', '$nomeUsuario', '$cpfCliente', '$email', '$senha', '$telefone','$dataNascimento')";
                    

$queryVerificaSeExisteUsuario = "SELECT emailUsuario FROM usuarios WHERE  emailUsuario='$email'";
                                $resultadoVerificaUsuario = mysqli_query($conexao,$queryVerificaSeExisteUsuario);
                                $rowVerificaUsuario = mysqli_fetch_assoc($resultadoVerificaUsuario);
                                
                                
if(mysqli_num_rows($resultadoVerificaUsuario) == 0 && !empty($email) &&!empty($senha) ){
    $insertData = mysqli_query($conexao, $getData);
 if(mysqli_insert_id($conexao)){
    echo '<!DOCTYPE html>';
   echo '<html xmlns="http://www.w3.org/1999/xhtml">';
   echo '<head>';
   echo '   <meta http-equiv="refresh" content="5;  url=../cadastro.php">';
   echo '</head>';
   echo '<body>';
   echo '<p>USUÁRIO CADASTRADO COM SUCESSO, REDIRECIONANDO PARA ÁREA DE LOGIN</p>';
   echo '<a href="../login.php">Prosseguir</a>';
   echo '</body>';
   echo '</html>';
}else{
    echo '<!DOCTYPE html>';
   echo '<html xmlns="http://www.w3.org/1999/xhtml">';
   echo '<head>';
   echo '   <meta http-equiv="refresh" content="50;  url=../cadastro.php">';
   echo '</head>';
   echo '<body>';
   echo '<p>USUÁRIO NÃO FOI CADASTRADO, VOLTANDO PARA ÁREA DE CADASTRO</p>';
   echo $nomeCompleto, $nomeUsuario, $cpfCliente, $email, $senha, $telefone, $dataNascimento;
   echo '<a href="../cadastro.php">Prosseguir</a>';
   echo '</body>';
   echo '</html>';
}

}else{
    echo '<!DOCTYPE html>';
    echo '<html xmlns="http://www.w3.org/1999/xhtml">';
    echo '<head>';
    echo '   <meta http-equiv="refresh" content="5;  url=../cadastro.php">';
    echo '</head>';
    echo '<body>';
    echo '<p>JÁ EXISTE UM USUÁRIO COM ESTE EMAIL CADASTRADO, REDIRECIONADO PARA ÁREA DE LOGIN</p>';
    echo '<a href="../login.php">Prosseguir</a>';
    echo '</body>';
    echo '</html>';
}





?>