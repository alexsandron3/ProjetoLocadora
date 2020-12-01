<?php
    include_once("conexao.php");
    $idUsuario = filter_input(INPUT_GET, 'idCliente', FILTER_SANITIZE_NUMBER_INT);
    $idFilme   = filter_input(INPUT_GET, 'idFilme',   FILTER_SANITIZE_NUMBER_INT);
    $queryFinalizaCompra = "INSERT INTO filmes_usuarios (nomePedido, dataPedido, qntdPedido, idUsuario, idFIlme) VALUES('ALUGUEL FILME', '2020/12/01', '1', '$idUsuario', '$idFilme')";
    $resultadoFinalizaCompra = mysqli_query($conexao, $queryFinalizaCompra);

    if(mysqli_insert_id($conexao)){
        echo '<!DOCTYPE html>';
        echo '<html xmlns="http://www.w3.org/1999/xhtml">';
        echo '<head>';
        echo '   <meta http-equiv="refresh" content="5;  url=../minhaconta.php">';
        echo '</head>';
        echo '<body>';
        echo '<p>PAGAMENTO REALIZADO COM SUCESSO, REDIRECIONANDO</p>';
        echo '<a href="../minhaconta.php">Prosseguir</a>';
        echo '</body>';
        echo '</html>';
    }else{
        echo '<!DOCTYPE html>';
        echo '<html xmlns="http://www.w3.org/1999/xhtml">';
        echo '<head>';
        echo '   <meta http-equiv="refresh" content="5;  url=../minhaconta.php">';
        echo '</head>';
        echo '<body>';
        echo '<p>PAGAMENTO NÃO REALIZADO, REDIRECIONANDO</p>';
        echo '<a href="../index.php">Prosseguir</a>';
        echo '</body>';
        echo '</html>';

    }



?>