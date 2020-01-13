<?php
$tab = array(15,22);
$tabCrochets = [15,22];
var_dump($tab);
var_dump($tabCrochets);

// Déclaration d'un tableau indexé numériquement
$jours = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");

var_dump($jours);

// add Sunday in tab this method will create it as last elements
$jours [] = "Dimanche";

var_dump($jours);

// add Patate in tab to a specified position
$jours [9] = "Patate";

// remove last entry in tableau
array_pop ($jours); 

// add Patate in tab to a specified position
$jours [9] = "Patate";

var_dump($jours);

// remove an entry in specified position into tab 
unset($jours[9]);

var_dump($jours);

echo $jours[2];

// array_shift($jours)   ; remove 1 st element in tableau
// array_splice($jours, 2) ; Efface et remplace une portion de tableau
// var_dump(array_slice($jours, 0 , 2) Extrait une portion de tableau
// sort ; sert a trier un tableau

?>
