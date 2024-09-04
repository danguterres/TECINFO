<?php
$tr = "Visite o SENAC";
$pat = "/SENAC/";
echo preg_match ( $pat, $tr );

echo "<br>";

$tatu="Visite o windows";
$pato="/WINDOWS/i";
echo preg_replace ( $pato, "WINDOWS", $tatu );
date_default_timezone_set("America/Sao_paulo");
echo "<br>";

echo "hoje e" . date("Y/m/d") ."<br>";

echo "<br>";

echo "Hoje é ". date("1") ."<br>";

echo "<br>";

echo  date("Y") ."<br>";
echo "hora" . date("h:i:sa") ."<br>";



?>