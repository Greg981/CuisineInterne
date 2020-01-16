
<?php
// create script to fill an array from 0 to 49
$nombres = array();
for ($i = 0; $i < 49; $i++) {
    array_push($nombres, $i + 1);
//echo $nombres[$i];
    //echo "<br>";
};
var_dump($nombres);

// create function that create and fill an array from 1 to 49
function tableau()
{
    $creerTableau = array();
    for ($i = 1; $i < 49; $i++) {
        array_push($creerTableau, $i);
    };
};  

tableau()

?>
