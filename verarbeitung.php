<?php

/// Das angesprochene Script "wiringPi/send" benötigt:
/// einen system-code, die Nummer der Steckdose und eine AN/AUS (0/1) angabe.
/// Beispiel: send 11011 2 1 (Steckdose 2 AN)

$eingabe1 = $_POST['sys'];
$eingabe2 = $_POST['item'];
$eingabe3 = $_POST['state'];

$returnvalue = 0;

if($eingabe1 != "" && $eingabe2 != "" && $eingabe3 != "")
{
  $befehl = 'wiringPi/433Utils/RPi_utils/send ' . $eingabe1 . " " . $eingabe2 . " " . $eingabe3;
  $returnvalue = exec($befehl);
}
echo $returnvalue;

 ?>
