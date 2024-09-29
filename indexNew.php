<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Desenvolvimento WEB</title>
    <link rel="stylesheet" href="./css/styleNew.css">
</head>

<body>
    <main>
        <p class="titulo">Bem vindo ao site Web Design em Foco</p>
        <div class="container">
        <div class="empresa-info">
            <?php
                $ponteiro=fopen("./content.txt", "r");
                $conteudo = fread ($ponteiro, filesize("./content.txt"));
                echo $conteudo;
                fclose ($ponteiro);
            ?>
        </div>
            <a href="./excluir_cookie.php">Escolher outro idioma</a>
        </div>
    </main>
</body>

</html>