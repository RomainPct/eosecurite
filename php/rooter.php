<?php
switch ($_SERVER['REDIRECT_URL']){
    case "":
        include_once 'pages/home.php';
        break;
    case  "/":
        include_once 'pages/home.php';
        break;
    default:
        include_once 'pages'.$_SERVER['REDIRECT_URL'].'.php';
        break;
}