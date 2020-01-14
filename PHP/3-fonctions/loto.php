<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

function tableau(){
$creertableau = array();
    for ($l=1; $l <= 49 ; $l++) { 
        array_push($creertableau, $l);
       }
       var_dump($creertableau);


}
tableau();
?> 



</body>
</html>
