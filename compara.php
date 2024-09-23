<?php
$valorCookie = $_COOKIE["idioma"];

if($valorCookie=="pt"){
    echo "<script>console.log('portugues')</script>";
}
else if($valorCookie == "en"){
    echo "<script>console.log('ingles')</script>";
}
else if($valorCookie == "es"){
    echo "<script>console.log('espanhol')</script>";
}