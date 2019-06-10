<?php
$url = $_SERVER['REDIRECT_URL'];
if ($url == "" || $url == "/") {
    include_once 'pages/home.php';
} else if ( strpos($url,"/formation/") === 0){
    $_GET["id"] = substr($url,11);
    include_once 'pages/formationdetaillee.php';
} else {
    include_once 'pages'.$_SERVER['REDIRECT_URL'].'.php';
}