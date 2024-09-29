<?php
$valorCookie = $_COOKIE["idioma"];
$data = "";
if ($valorCookie == "pt") {
    $data = "<b>EMPRESA</b><br>
            A XXX INDÚSTRIA DE MÁQUINAS LTDA, foi fundada em 1970, e tornou-se o
            mais importante e tradicional fabricante de máquinas ensacadeiras no Brasil";
} else if ($valorCookie == "en") {
    $data = "<b>OUR PLANT</b><br>
            The XXX INDÚSTRIA DE MÁQUINAS LTDA, was founded on 1970, and became
            the most important and traditional supplyer of BAGGING MACHINES in Brazil.";
} else if ($valorCookie == "es") {
    $data = "<b>EMPRESA</b><br>
            La XXX INDÚSTRIA DE MÁQUINAS LTDA, fue fundada en 1970, y sé a convertido
            en la más importante y tradicional fabrica de MÁQUINAS ENSACADORAS em
            Brasil";
}
$content = fopen('./content.txt', "w+");
fwrite($content, $data);
fclose($content);

header("Location: indexNew.php");
