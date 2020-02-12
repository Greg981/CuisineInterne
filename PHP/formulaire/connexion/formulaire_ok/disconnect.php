<?php
session_start();
setcookie('nick','',time()-3600); // permet de degager le cookie à la fin de la session
setcookie('pass','',time()-3600);
$_SESSION = array();
session_destroy();
header("Location: connexion.php")
?>