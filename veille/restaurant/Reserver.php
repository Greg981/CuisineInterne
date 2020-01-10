<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<?php require "menu.php" ?>


<div class="flex-item">

        <form action="cible.php" method="post" target=_blank>

            
            <label for="name">Nom* :</label>
                    <input type="text" required id="name" name="name">

            <label for="sname">Prénom :</label>
                    <input type="text" id="sname" name="sname">
            

            
                <label for="mail">E-mail* :</label>
                <input type="email" required id="mail" name="email" placeholder="email@example.com" >
            

            <label for='tele'> Téléphone : </label>
            <input id="tele" name="tele" type="tel" pattern="[0-9]{10}" maxlength="10" placeholder="0600112244" >

            
                <label for="num">Nombre de personnes*</label>
                <input type="number" required id="num" name="num">

                <label for="heure">Heures*</label>
                <input type="time" required id="heure" name="heure">
            
                <label for="msg">Message (optionnel) :</label>
                <textarea id="msg" name="msge"></textarea>

        <div class="button">
                <button id ="reserver" type="submit">Réserver</button>
        </div>
</form>

<!-- PHP SCRIPT ----------------------------------------------------------
---------------------------------------------------------------------------->



</div>

<br> <br> <br>
<?php require "footer.php" ?>
    




