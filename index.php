<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <?php
        if (ISSET($_COOKIE["idioma"])){
            include "compara.php";
        }
?>
</head>


<body>
    <main>
        <p class="titulo">Bem vindo ao site Web Design em Foco</p>
        <p class="opcao-linguagem">Escolha o idioma para entrar</p>
        <div class="bandeiras">
            <a href="./idioma.php?idioma=pt"><img src="./assets/brasilBandeira.png" alt=""></a>
            <a href="./idioma.php?idioma=en"><img src="./assets/brasilBandeira.png" alt=""></a>
            <a href="./idioma.php?idioma=es"><img src="./assets/brasilBandeira.png" alt=""></a>
        </div>
    </main>
</body>

</html>