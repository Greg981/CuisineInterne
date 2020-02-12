<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre;charset=utf8', 'greg', 'greg');

include_once('cookie_Connect.php');

if(isset($_POST['formconnect']))
{
    $nicknameconnect = htmlspecialchars($_POST['nicknameconnect']);
    $passwordconnect = hash('sha256',$_POST['passwordconnect']);
    if (!empty($nicknameconnect) AND !empty($passwordconnect)) 
    {
        $requser = $bdd->prepare ("SELECT * FROM membres WHERE nickname = ? AND passwor = ? ");
        $requser->execute(array($nicknameconnect, $passwordconnect));
        $userexist = $requser->rowCount();
        if ($userexist == 1) 
        {
            if(isset($_POST['remember'])) //traitement de la checkbox si variable remember exist et est coché alors
            {
                setcookie('nick',$nicknameconnect,time()+365*24*3600,null,null,false,true);// permet de degager le cookie après 1 an de stockage
                setcookie('pass',$passwordconnect,time()+365*24*3600,null,null,false,true);
            }
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['nickname'] = $userinfo['nickname'];
            $_SESSION['email'] = $userinfo['email'];
            header("Location: profil.php?id=".$_SESSION['id']);
        }
        else
        {
            $erreur = "Wrong Nickname or Password !!!";
        }
    }
    else
    {
        $erreur = "All fields MUST be filled!!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
</head>

<body>

    <div align="center">

        <h2>Connexion</h2>
        <br /><br />
        <form method="POST" action="">
            <input type="text" name="nicknameconnect" placeholder="nickname" />
            <input type="password" name="passwordconnect" placeholder="password" />  
            <br /><br /> 
            <input type="checkbox" name="remember" id="remembercheckbox"><label for="remembercheckbox">Remember me</label>
            <br /><br />
            <input type="submit" name="formconnect" value="connect !" />
            
        </form>

 <?php
if(isset($erreur))
{
    echo '<font color="red">'.$erreur.'</font>';
}
 ?>

    </div>

</body>

</html>