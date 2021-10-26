<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'teste_upload';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/* if ($conexao->connect_errno) {
    echo "Erro";
} else {
    echo "conexão efetuada com sucesso";
} */
