<?php

/**
 * faz uma conexao com o banco de dados mysql,
 *  na base de dados recuperar senha.
 * 
 * @return retorna uma conexão com a base de dados, ou em caso
 * de falha, mata a execução e exibe o erro.
 */
function conectar()
{
    $conexao = mysqli_connect("localhost", "root", "", "recuperar_senha");
    if ($conexao === false) {
        echo "Erro ao conectar à base de dados. N° do erro:" .
            mysqli_connect_errno($conexao) . "." .
            mysqli_connect_error();
        die();
    }
    return $conexao;
}
