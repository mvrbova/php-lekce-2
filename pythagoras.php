<?php
$a = 4;
$b = 7;
$obdelnikobsah = $a * $b;
echo 'Obsah obdélníku o stranách a ', $a, 'cm a b ', $b, 'cm je ', $obdelnikobsah, ' cm².';

$strana = 6;
$uhel = 60;
$vyska = $strana * sin (deg2rad (60));
$trojuhelnikobsah = round($strana / 2 * $vyska);
echo 'Rovnostranný trojúhelník o straně délky ', $strana, ' cm a ', $uhel, '° je ', $trojuhelnikobsah, ' cm².';

