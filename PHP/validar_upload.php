<?php

include("config.php");

if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    if ($arquivo['error'])
        die("Falha ao enviar o arquivo");

    if ($arquivo['size'] > 2097152)
        die("Arquivo muito grande!! Max: 2MB");

    $pasta = "../upload/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != "png")
        die("Tipo de arquivo não aceito");
    $path = $pasta . $novoNomeDoArquivo . "." . $extensao;

    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);

    if ($deu_certo) {
        $conexao->query("INSERT INTO arquivos(nome,path) VALUES('$nomeDoArquivo','$path')");
        header('Location: upload.php');
    } else {
        echo "<p>Falha ao enviar o arquivo</p>";
    }
}
