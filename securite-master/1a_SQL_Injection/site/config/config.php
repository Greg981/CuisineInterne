<?php
define("BDD_SERVER", "127.0.0.1");
define("BDD_DATABASE", "security");
define("BDD_USER", "greg");
define("BDD_PWD", "greg");
// ini_set("allow_url_fopen","0");

//gestion de la session et du cookie de session 
session_start();
if (!array_key_exists('token', $_COOKIE) ) {
    $_SESSION['pseudo'] = 'Nadine';
    $_SESSION['token'] ="2e81680e2d9727b068ebba0c9975425b";
    setcookie("token", $_SESSION['token'], time() + 365*24*3600);
    setcookie('pseudo', $_SESSION['pseudo'], time() + 365*24*3600);     
}
else {    
    $_SESSION['pseudo'] = $_COOKIE['pseudo'];
    $_SESSION['token'] = $_COOKIE['token'];
}

?>