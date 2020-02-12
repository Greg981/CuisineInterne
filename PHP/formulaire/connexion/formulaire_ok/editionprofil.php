<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre;charset=utf8', 'greg', 'greg');

include_once('cookie_Connect.php');

if (isset($_SESSION['id']))
{
   $requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();

        if(isset($_POST['newnickname']) AND !empty($_POST['newnickname']) AND $_POST['newnickname'] != $user['nickname'])
        {
            $newnickname = htmlspecialchars($_POST['newnickname']);
            $insertnickname = $bdd->prepare("UPDATE membres set nickname = ? WHERE id =?");
            $insertnickname->execute(array($newnickname, $_SESSION['id']));
            header('Location: profil.php?id='.$_SESSION['id']);
        }

   
        if(isset($_POST['newnemail']) AND !empty($_POST['newnemail']) AND $_POST['newnemail'] != $user['email'])
        {
       
            $newemail = htmlspecialchars($_POST['newnemail']);
            $insertemail = $bdd->prepare("UPDATE membres set email = ? WHERE id =?");
            $insertemail->execute(array($newemail, $_SESSION['id']));
            header('Location: profil.php?id='.$_SESSION['id']);
        }

        if(isset($_POST['newpassword']) AND !empty($_POST['newpassword']) AND isset($_POST['newcpassword']) AND !empty($_POST['newcpassword']))
        {
                $password = hash('sha256', $_POST['newpassword']);
                $cpassword = hash('sha256', $_POST['newcpassword']);

            if($password == $cpassword)
            {
                $insertpassword = $bdd->prepare("UPDATE membres set passwor = ? WHERE id =?");
                $insertpassword->execute(array($password, $_SESSION['id']));
                header('Location: profil.php?id='.$_SESSION['id']);
            }
            else 
            {
                $erreur = "Your password do not match!!!";
            }


        }
        if(isset($_POST['newnickname']) AND $_POST['newnickname'] == $user['nickname']);
        {
        //  header('Location: profil.php?id='.$_SESSION['id']);
        // var_dump($_SESSION['id']);
        }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edition de Profil</title>
</head>

<body>

    <div align="center">

        <h2>Edit Profile</h2>
        <form method="POST" action="">

            <table>
                <tr>
                    <td align="right">
                        <label for="nickname">Nick name :</label>
                    </td>
                    <td>
                        <input type="text" name="newnickname" placeholder="New Nickname" value="<?php echo $user['nickname']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="email">Email :</label>
                    </td>
                    <td>
                        <input type="text" name="newnemail" placeholder="New Email" value="<?php echo $user['email']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="password">Password :</label>
                    </td>
                    <td>
                        <input type="password" name="newpassword" placeholder="Enter New Password"/>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="cpassword">Confirm Password :</label>
                    </td>
                    <td>
                        <input type="password" name="newcpassword" placeholder="Confirm New Password "/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <br />
                        <input type="submit" value="Profile Update !"/>
                    </td>
                </tr>
            </table>
            <?php if(isset($erreur)) 
            {
            '<font color="red">'.$erreur.'</font>';
            }
            ?>
        </form>
    </div>

</body>

</html>
<?php
}
else 
    {
        header("Location: connexion.php");
    }
?>


