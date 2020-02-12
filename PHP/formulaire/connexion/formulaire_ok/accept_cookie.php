<?php

setcookie('accept_cookie', true, time()+30*24*3600,'/',null,false,true);// permet de degager le cookie après 1 mois de stockage

if(isset($_SERVER['HTTP_REFERER']) AND !empty($_SERVER['HTTP_REFERER']))
{
    header('Location:'.$_SERVER['HTTP_REFERER']);
}
else
{
    header('Location: connexion.php'); //permet de rediriger vers le lieu souhaite
}

?>