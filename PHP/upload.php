<?php

include("config.php");

$sql_query = $conexao->query("SELECT * FROM arquivos");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Document</title>
</head>

<body>
    <div class="conteiner">
        <div class="box">
            <form action="validar_upload.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>
                        <b>
                            <h1>Upload de arquivos</h1>
                        </b>
                    </legend>
                    <div class="inputBox">
                        <label for="arq" class="labelInput">arquivo:</label>
                        <input class="inputUser" type="file" name="arquivo" required>
                    </div>
                    <br><br>
                    <input type="submit" id="submit" value="Salvar">
                </fieldset>
            </form>
        </div>
        <div class="conteudo">
            <?php while ($acervo = $sql_query->fetch_assoc()) { ?>
                <div class="listaArquivo">
                    <img src="<?php echo $acervo['path'] ?>">
                    <div class="infLista">
                        <h1>Nome do arquivo: <?php echo $acervo['nome'] ?> </h1>
                        <h1>Data de envio: <?php echo $acervo['data_upload'] ?></h1>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>



</body>

</html>