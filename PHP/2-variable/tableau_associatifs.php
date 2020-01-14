<?php
$activites = array("Lundi"=>"Php","Mardi"=>"Javascript", "Mercredi"=>"Typescript","Jeudi"=>"Angular","Vendredi"=>"SQL","Samedi"=>"Python","Dimanche"=>"Tout");
var_dump($activites);
// modify Sunday activity to nothing, using name value
$activites['Dimanche'] = 'Repos';
var_dump($activites);
// using asort to modify Sunday activity content
asort ($activites['Dimanche'] = "repos bien mérité");
var_dump($activites);

//deux dimensions
$pierre = array("1"=>"Php","2"=>"Javascript","3"=>"Python");
$paul = array("1"=>"Javascript","2"=>"Css","3"=>"Php");
$jacques = array("1"=>"Java","2"=>"Php","3"=>"Javascript");

$preferences = array_merge($pierre, $paul, $jacques);

var_dump($preferences);

$associationPreferences = ["Pierre"=>$pierre,"Paul"=>$paul,"Jacques"=>$jacques];

var_dump($associationPreferences);

$occurences = array_count_values($preferences);
var_dump($occurences);


?>