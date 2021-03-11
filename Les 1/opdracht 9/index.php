<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>

   <?php

$getal1 = 10;
$getal2= 255;
$getal3= 112;
$getal4 = 45;
$getal5 = 4;

$grootstegetal= 0;

for ($teller = 1; $teller <6 ; $teller++)
{
$grootstegetal = max($grootstegetal, $getal1);

$getal1 = $getal2;
$getal2 = $getal3;
$getal3 = $getal4;
$getal4 = $getal5;
}


echo "Het grootste getal is: " . $grootstegetal;

?>

</body>
</html>
