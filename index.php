<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Desenvolvimento WEB</title>
    <link rel="stylesheet" href="./css/styles.css">
    <?php
        if (ISSET($_COOKIE["idioma"])){
            include "compara.inc";
        }
?>
</head>


<body>
    <main>
        <p class="titulo">Bem vindo ao site Web Design em Foco</p>
        <p class="opcao-linguagem">Escolha o idioma para entrar</p>
        <div class="bandeiras">
            <a href="./idioma.php?idioma=pt"><img src="./assets/brasilBandeira.png" alt="Portugues Brasil"></a>
            <a href="./idioma.php?idioma=en"><img src="./assets/ukBandeira.png" alt="Ingles"></a>
            <a href="./idioma.php?idioma=es"><img src="./assets/espanhaBandeira.png" alt="Espanhol"></a>
        </div>
    </main>
</body>

</html>