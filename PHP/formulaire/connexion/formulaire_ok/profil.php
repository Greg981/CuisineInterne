<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre;charset=utf8', 'greg', 'greg');

include_once('cookie_Connect.php');

if (isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
</head>

<body>

    <div align="center">

        <h2>Profil de <?php echo $userinfo['nickname']; ?></h2>
        <br /><br />
        Nickname = <?php echo $userinfo['nickname']; ?>
        <br />
        Email = <?php echo $userinfo['email']; ?>
        <br />



    <?php
        if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) :  // : remplace {
    ?>
    <br />
    <a href="editionprofil.php">Edit my Profile</a>;
    <a href="disconnect.php">Disconnect</a>;
<?php
endif;// remplace balise fermante }
?>

    </div>

</body>

</html>
<?php
}
else {
    header("Location: connexion.php");
}
?>