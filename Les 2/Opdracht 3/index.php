<?php

$reeks1 = array (7 , 15 , 500 , 3 , 45);
echo "<pre>". print_r($reeks1, true). "</pre>" ;


arsort($reeks1);
echo "<pre>". print_r($reeks1, true). "</pre>" ;

asort($reeks1);
echo "<pre>". print_r($reeks1, true). "</pre>" ;

shuffle($reeks1);
echo "<pre>". print_r($reeks1, true). "</pre>" ;
?>
