<html>
<body>

<?php

$engels = 80;
$wiskunde = 90;
$frans = 12;
$informatica = 100;
$economie = 87;

$aantalBuizen=0;


if ($engels<50)
{
  $aantalBuizen++;
}

if ($wiskunde<50)
{
  $aantalBuizen++;
}

if ($frans<50)
{
  $aantalBuizen++;
}

if ($informatica<50)
{
  $aantalBuizen++;
}

if ($economie<50)
{
  $aantalBuizen++;
}

$gem= ( $economie + $informatica + $frans + $wiskunde + $engels ) / 5;

if ($aantalBuizen < 3 &&  $gem > 50 )
{
  echo "je gemiddelde was " . $gem . " Je hebt " . $aantalBuizen . " En je bent dus geslaagd";
}

else {
    echo "je gemiddelde was " . $gem . " Je hebt " . $aantalBuizen . " En je bent dus niet geslaagd";
}

 ?>

</body>
</html>
