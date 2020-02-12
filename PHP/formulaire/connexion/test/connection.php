<?php

if(isset($_POST['formInscription']))
{
    $nickname = htmlspecialchars($_POST['nickname']);
    $email = htmlspecialchars($_POST['email']);
    $cemail = htmlspecialchars($_POST['cemail']);
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    // $cpassword = sha1($_POST['cpassword']);

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

                        if($_POST['password'] == $_POST['cpassword'])
                        {
                            $insertmember = $bdd->prepare("INSERT INTO membres (nickname, email, passwor) VALUES(?, ?, ?)");
                            $insertmember->execute(array($nickname, $email, $password));
                            $erreur = "Your account have been created";  
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
