<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <p class="titulo">Bem vindo ao site Web Design em Foco</p>
        <p class="opcao-linguagem">Escolha o idioma para entrar</p>
        <div class="empresa-info">
            <?php
                $ponteiro=fopen("./content.txt", "r");
                $conteudo = fread ($ponteiro, 300);
                echo $conteudo;
                fclose ($ponteiro);
            ?>
        </div>
        <div>
            <a href="./excluir_cookie.php">Escolher outro idioma</a>
        </div>
    </main>
</body>

</html>