<?php declare(strict_types=1);

function naam(string $Voornaam, int $jaar){
  echo "$Voornaam Janssen. Geboren in $jaar<br>";
}

naam("Jos" , 1980);
naam("Jefke" , 2000);
naam( 500 , 1960);

?>
