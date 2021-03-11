<html>
<body>

<?php

$bedrag = 1150;

if ($bedrag > 1200)
{
$prijs = $bedrag - 10;
echo "je moet " . $prijs . " betalen";
}
else if ($bedrag > 1100 )
{
  $prijs = $bedrag - 5;
  echo "je moet " . $prijs . " betalen";
}
else 
{
  $prijs = $bedrag - 1;
  echo "je moet " . $prijs . " betalen";
}

 ?>

</body>
</html>
