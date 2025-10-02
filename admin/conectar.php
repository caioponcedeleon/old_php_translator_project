<?php

$database  = "localhost"; // Servidor e porta
$dbname    = "antigo_trazubbettor"; // Nome do banco de dados
$usuario   = "root"; // Usuário do MySQL
$dbsenha   = ""; // Senha do MySQL

//==== Originally programmed in August 2013 (mysql_connect) // Updated in October 2025 (mysqli)
// A função mysqli_connect() retorna um objeto de conexão ou FALSE em caso de erro.
$conexao = mysqli_connect($database, $usuario, $dbsenha, $dbname);

// Verifica se a conexão falhou
if (mysqli_connect_errno()) {
    // Imprime uma mensagem de erro e a razão da falha
    echo "Erro ao conectar ao MySQL: " . mysqli_connect_error();
    // Interrompe a execução do script
    exit();
}
?>


