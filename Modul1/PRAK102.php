<?php
$tinggi_prisma = 5.4;
$alas_segitiga = 3.5;
$tingi_segitiga = 4.4;

$volume = ($alas_segitiga*$tingi_segitiga/2)*$tinggi_prisma;

echo round($volume,3).(" m3");
?>