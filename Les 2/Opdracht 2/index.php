<?php

$reeks1 = array();
$reeks2 = array();
$reeks3 = array();

//loop vullen array

for ($teller=0 ; $teller<5 ; $teller++)
{
$reeks1[$teller] = mt_rand(0,10);
$reeks2[$teller] = mt_rand(0,10);
$reeks3[$teller] = $reeks1[$teller] + $reeks2[$teller] ;

// weergeven
echo $reeks1[$teller] . " + " . $reeks2[$teller] . " = " . $reeks3[$teller]. "<br>";

}

?>
