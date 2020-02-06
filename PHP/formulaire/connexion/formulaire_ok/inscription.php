<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre;charset=utf8', 'greg', 'greg');

if(isset($_POST['formInscription']))
{
    $nickname = htmlspecialchars($_POST['nickname']);
    $email = htmlspecialchars($_POST['email']);
    $cemail = htmlspecialchars($_POST['cemail']);
    $password = sha1($_POST['password']);
    $cpassword = sha1($_POST['cpassword']);

    if(!empty($_POST['nickname']) AND !empty($_POST['email']) AND !empty($_POST['cemail']) AND !empty($_POST['password']) AND !empty($_POST['cpassword']))
    {
       
        $nicknamelength = strlen($nickname);
        if($nicknamelength <= 255)
        {
            $reqnickname = $bdd->prepare ("SELECT * FROM membres WHERE nickname = ?");
            $reqnickname->execute(array($nickname));
            $nicknameexist = $reqnickname->rowCount();
            if ($nicknameexist == 0) 
                {
                if($email == $cemail)
                {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        $reqemail = $bdd->prepare ("SELECT * FROM membres WHERE email = ?");
                        $reqemail->execute(array($email));
                        $emailexist = $reqemail->rowCount();
                        if ($emailexist == 0) 
                    {

                        if($password == $cpassword)
                        {
                            $insertmember = $bdd->prepare("INSERT INTO membres (nickname, email, passwor) VALUES(?, ?, ?)");
                            $insertmember->execute(array($nickname, $email, $password));
                            $erreur = "Your account have been created ! <a href=\"connexion.php\">connect</a>";  
                            }
                            else 
                            {
                                $erreur = "Your Password do not match !!";
                            }
                            }
                            else
                            {
                                $erreur = " Email already exist!!";
                            }    
                        }
                       else
                       {
                        $erreur = "Your email adress is not valid !!";
                       }
                }
                else 
                {
                $erreur = "Your Email adress do not match !!"; 
                }
            }
            else
            {
                $erreur = "Nickname already exist !!";  
            }   
        }
        else
        {
            $erreur = " Your Nick Name must be below 255 digits!!!";
        }
    }
    else 
    {
       $erreur = "remplie TOUT les champs connard!";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inscription</title>
</head>

<body>

    <div align="center">

        <h2>Inscription</h2>
        <br /><br />
        <form method="POST" action="">
            <table>
                <tr>
                    <td align="right">
                        <label for="nickname">Nick name :</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Your Nick name" id="nickname" name="nickname" value="<?php if(isset($nickname)) { echo $nickname; } ?>"/>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="email">Email :</label>
                    </td>
                    <td>
                        <input type="text" placeholder="Enter your Email" id="email" name="email" value="<?php if(isset($email)) { echo $email; } ?>" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="cemail">Comfirm Email :</label>
                    </td>
                    <td>
                        <input type="email" placeholder="Please confirm your Email" id="cemail" name="cemail" value="<?php if(isset($cemail)) { echo $cemail; } ?>" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="password">Password :</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Enter your Password" id="password" name="password" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <label for="cpassword">Confirm Password :</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Please confirm Password" id="cpassword" name="cpassword" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td align="center">
                        <br />
                        <input type="submit" name="formInscription"  value="Je m'inscris" />
                    </td>
                </tr>
            </table>


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