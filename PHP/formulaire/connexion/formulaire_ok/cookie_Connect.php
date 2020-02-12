<?php
if(!isset($_SESSION['id']) AND isset($_COOKIE['nick'],$_COOKIE['pass']) AND !empty($_COOKIE['nick'])AND !empty($_COOKIE['pass']))  //if sessionID doesn't exist and cookie'nick' et 'pass' existent et sont different de vide
{
    $requser = $bdd->prepare ("SELECT * FROM membres WHERE nickname = ? AND passwor = ? ");
    $requser->execute(array($_COOKIE['nick'], $_COOKIE['pass']));
    $userexist = $requser->rowCount();
    if ($userexist == 1) 
    {
        $userinfo = $requser->fetch();
        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['nickname'] = $userinfo['nickname'];
        $_SESSION['email'] = $userinfo['email'];
    }
}
?>

