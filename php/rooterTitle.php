<?php
$url = $_SERVER['REDIRECT_URL'];
if ($url == "" || $url == "/" || $url == "/home") {
    echo "Accueil";
} else if ( strpos($url,"/formation/") === 0){
    echo "Formation";
} else if ( $url == "/contactvalidation") {
    echo "Contact";
} else {
    echo ucfirst(substr($_SERVER['REDIRECT_URL'],1));
}