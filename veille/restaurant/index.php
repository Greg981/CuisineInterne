<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
<?php require "menu.php" ?>
<div class="flex-item">
        
    <form action="cible.php" method="post" target=_blank>
        
    <fieldset> 
        <legend> Identité </legend>         
        <label for="name">Nom* :</label>
        <input type="text" required id="name" name="name">
    
        <label for="sname">Prénom :</label>
        <input type="text" id="sname" name="sname">
         Quel tranche d'âges êtes vous  ?
       <input type="radio" name="age" value="moins15" id="moins15" /> <label for="moins15">Moins de 15 ans</label> 
       <input type="radio" name="age" value="medium15-25" id="medium15-25" /> <label for="medium15-25">15-25 ans</label> 
       <input type="radio" name="age" value="medium25-40" id="medium25-40" /> <label for="medium25-40">25-40 ans</label>     
        
    </fieldset>
        <label for="mail">E-mail* :</label>
        <input type="email" required id="mail" name="email" placeholder="email@example.com" >
            
        <label for='tele'> Téléphone : </label>
        <input id="tele" name="tele" type="tel" pattern="[0-9]{10}" maxlength="10" placeholder="0600112244" >

        <label for="num">Nombre de personnes*</label>
        <input type="number" required id="num" name="num">

        <label for="num">Nombre de personnes*</label>
        <input type="range" required id="num" name="num">

        <label for="heure">Heures*</label>
        <input type="time" required id="heure" name="heure">
            
        <label for="msg">Message (optionnel) :</label>
        <textarea id="msg" name="msge"></textarea>

        <button id ="reserver" type="submit">Réserver</button>
        
</form>
 <!-- PHP SCRIPT ----------------------------------------------------------
---------------------------------------------------------------------------->
</div>    
<br> <br> <br>
<?php require "footer.php" ?>
<!-- <style>
    /* body {
        background-color:grey;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
        flex-wrap: wrap;
    }  */
label{
    display:inline-block;
    padding:10px;
    width:100px;
}


</style>
<body>

    <form method="POST" action="traitement.php" target=_blank  >
        <p>  Pseudo
            <label for="pseudo"> Votre pseudo : </label>
            <input type="text" name="pseudo" id ="pseudo" placeholder='yoyo' 
            required size='15' minlength='3' maxlength='15' pattern="[a-zA-z0-9]{3,15}" autofocus /> 
        </p>
        <p> Téléphone
            <label for="phone"> Téléphone : </label>
            <input type="tel" name="phone" id ="phone" placeholder='0611223344' 
            required size='15' pattern="[O-9]{10}" maxlength="10"/> 
        </p>

        <p>  Mot de passe
            <label for="password"> Mot de passe : </label>
            <input type="password" name="password" id ="password" 
            required size='15'  maxlength="10"/> 
        </p>
        <p>  Number
            <label for="password"> Mot de passe : </label>
            <input type="number" name="password" id ="password" />
        </p>
        <p>  Range
            <label for="password"> Mot de passe : </label>
            <input type="range" name="password" id ="password" />
        </p>
        <p> <Checkbox
            <label for="password"> Mot de passe : </label>
            <input type="color" name="password" id ="password" />
        </p>

        <button type="submit">gfdgdfgfg</button>
    </form>


</body>
</html> -->