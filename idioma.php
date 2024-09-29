<?php
if (isset($_GET['idioma'])) {
    $idioma = $_GET['idioma'];
    setcookie('idioma', $idioma, time() + (3 * 24 * 60 * 60));
    header("Location: index.php");
    exit();
}
