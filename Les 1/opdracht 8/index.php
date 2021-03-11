<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>

   <?php

$aantal = 2;
$groei= 1.15;

for ( $teller = 0 ; $aantal < 10 ; $teller++)
{
$aantal *= $groei;
}

echo "Binnen " . $teller . " jaren zijn er 10 miljoen ratten in NY";
?>

</body>
</html>
