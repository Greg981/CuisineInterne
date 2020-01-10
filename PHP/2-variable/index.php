<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    // declaration de la variable//
        $hello = "Hello"; 
        //Afficher la variable $hello//
        //  echo $hello; //

        $world = "World";
         //Afficher la variable $hello+$word//
         echo $hello.",". " ".$world." "."!";
    ?>
         <br>
         <br>

    <?php
         // creation 3ieme variable//
         $hw = $hello.",". " ".$world." "."!";
     //Afficher la variable $hw//
    echo $hw;
    ?>
<br>
<br>

<?php
$montantHt = 15.2;
$montantTva = 1.2;
$montantTtc = $montantHt * $montantTva;

echo "le prix ttc est de :". $montantTtc. " "."€uro";

?>


</body>
</html>