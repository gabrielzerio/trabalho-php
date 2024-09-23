<?php

if (isset($_GET['idioma'])) {
    $idioma = $_GET['idioma'];

    setcookie('idioma', $idioma, time() + (3 * 24 * 60 * 60)); // 3 dias

    header("Location: index.php");
    exit();
    
} else {
    header("Location: index.php");
    exit();
}
