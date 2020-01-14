<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tirage</title>
</head>
<body>

<?php

$tableau = array();
for ($g=0; $g < 5 ; $g++) { 
array_push($tableau, rand(1,49));
}
var_dump($tableau);


?>

<h1>Boucle for</h1>
<?php

$tirage = array();
for ($h=0; $h < 5 ; $h++) {
if (in_array(rand(1,49), $tirage)) {
    
} else {
    array_push($tirage , rand(1,49));
}
}
var_dump($tirage);
?>


<h1>Boucle while </h1>
<?php
$tirage2 = array();
$a=1;
while ($a <= 5) {
    $a++;
    if (in_array(rand(1,49), $tirage2)) {
    array_push($tirage2 , rand(1,49));
    } else {
        array_push($tirage2 , rand(1,49));
    }
    }
    var_dump($tirage2);
 ?>   

<h1>Fonction 10 tirage avec statistique</h1>
<?php

function tirage (){
    $tirage10 =array();
    $nombre = 1;
while ($nombre <= 10) {
    $nombre++;
    if (in_array(rand(1,49),$tirage10)) {
        array_push($tirage10 , rand(1,49));
echo'deja';

    }else {
        array_push($tirage10, rand(1,49));
    }
}
var_dump($tirage10);
}
tirage();

?>



</body>
</html>