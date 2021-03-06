<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre;charset=utf8', 'greg', 'greg');

if(isset($_POST['recovery_submit'],$_POST['mail_recovery']))
{
    if(!empty($_POST['mail_recovery']))
    {
        $recup_mail= htmlspecialchars($_POST['mail_recovery']);
        if(filter_var($recup_mail,FILTER_VALIDATE_EMAIL))
        {
            $mailexist = $bdd->prepare('SELECT id,nickname FROM membres WHERE email =?');
            $mailexist->execute(array($recup_mail));
            $mailexist_count = $mailexist->rowCount();
            if($mailexist_count == 1)
            {
                $nickname = $mailexist->fetch();
                $nickname = $nickname['nickname'];
                

                $_SESSION['mail_recovery'] = $recup_mail;
                $token = "" ;
                for ($i=0; $i < 8; $i++) 
                { 
                    $token .= mt_rand(0,9);
                }
                $mail_recup_exist = $bdd->prepare('SELECT id FROM recup WHERE mail = ?');
                $mail_recup_exist->execute(array($recup_mail));
                $mail_recup_exist = $mail_recup_exist->rowCount();

                    if($mail_recup_exist == 1)
                    {
                        $getToken = $bdd->prepare('UPDATE recup SET token = ? WHERE mail =?');
                        $getToken->execute(array($token,$recup_mail));
                    }
                    else
                    {
                        $getToken = $bdd->prepare('INSERT INTO recup(mail,token,confirmation) VALUES (?,?)');
                        $getToken->execute(array($recup_mail,$token));
                    }
                }
                $header="MIME-Version: 1.0\r\n";
             $header.='From:"[VOUS]"<votremail@mail.com>'."\n";
             $header.='Content-Type:text/html; charset="utf-8"'."\n";
             $header.='Content-Transfer-Encoding: 8bit';
             $message = '
             <html>
             <head>
               <title>Password recovery - Votresite</title>
               <meta charset="utf-8" />
             </head>
             <body>
               <font color="#303030";>
                 <div align="center">
                   <table width="600px">
                     <tr>
                       <td>
                         
                         <div align="center">Hello <b>'.$nickname.'</b>,</div>
                         Here is your Token: <b>'.$token.'</b>
                         Seen you soon on: <a href="#">Votre site</a> !
                         
                       </td>
                     </tr>
                     <tr>
                       <td align="center">
                         <font size="2">
                            this is an automatic email please do not reply
                         </font>
                       </td>
                     </tr>
                   </table>
                 </div>
               </font>
             </body>
             </html>
             ';
            mail($recup_mail, "Récupération de mot de passe - Votresite", $message, $header);
            header("Location:http://127.0.0.1/CuisineInterne/PHP/formulaire/connexion/formulaire_ok/password_reco_formular.php?section=token");
            } 
            else
            {
                $error = "Email adress doesn't exist";
            }
        } 
        else 
        {
            $error = "Invalid email adress";
        }

    } 
    else 
    {
        $error = "Please enter your email adress";
    }

if(isset($_POST['verif_submit'],$_POST['verif_code'])) {
        if(!empty($_POST['verif_code'])) {
           $verif_code = htmlspecialchars($_POST['verif_code']);
           $verif_req = $bdd->prepare('SELECT id FROM recup WHERE mail = ? AND token = ?');
           $verif_req->execute(array($_SESSION['recup_mail'],$verif_code));
           $verif_req = $verif_req->rowCount();
           if($verif_req == 1) {
              $up_req = $bdd->prepare('UPDATE recup SET confirmation = 1 WHERE mail = ?');
              $up_req->execute(array($_SESSION['recup_mail']));
              header('Location:127.0.0.1/CuisineInterne/PHP/formulaire/connexion/formulaire_ok/password_reco_formular.php?section=changemdp');
           } else {
              $error = "Invalid Code";
           }
        } else {
           $error = "Enter your confirmation code";
        }
     }
     if(isset($_POST['change_submit'])) {
        if(isset($_POST['change_pass'],$_POST['change_pass_conf'])) {
           $verif_confirme = $bdd->prepare('SELECT confirmation FROM recup WHERE mail = ?');
           $verif_confirme->execute(array($_SESSION['recup_mail']));
           $verif_confirme = $verif_confirme->fetch();
           $verif_confirme = $verif_confirme['confirmation'];
           if($verif_confirme == 1) {
              $mdp = htmlspecialchars($_POST['change_pass']);
              $mdpc = htmlspecialchars($_POST['change_pass_conf']);
              if(!empty($mdp) AND !empty($mdpc)) {
                 if($mdp == $mdpc) {
                    $mdp = hash('sha256',$mdp);
                    $ins_mdp = $bdd->prepare('UPDATE membres SET passwor = ? WHERE mail = ?');
                    $ins_mdp->execute(array($mdp,$_SESSION['recup_mail']));
                   $del_req = $bdd->prepare('DELETE FROM recup WHERE mail = ?');
                   $del_req->execute(array($_SESSION['recup_mail']));
                    header('Location:http://127.0.0.1/path/connexion/');
                 } else {
                    $error = "Your Password do not match!";
                 }
              } else {
                 $error = "Fill ALL fields connard!";
              }
           } else {
              $error = "Please validate your email with the Token previously send via email";
           }
        } else {
           $error = "Fill ALL fields connard!";
        }
     }
   

 require_once('password_reco_formular.php')
?>