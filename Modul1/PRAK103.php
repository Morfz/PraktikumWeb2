<?php
$celsius = 37.841;

$fahrenheit = (9/5*$celsius)+32;
$reamur = 4/5*$celsius;
$kelvin = 273.15+$celsius;

echo ("Fahrenheit (F) = ").round($fahrenheit,4)."<br>";
echo ("Reamur (R) = ").round($reamur,4)."<br>";
echo ("Kelvin (K) = ").round($kelvin,4)."<br>";
?>