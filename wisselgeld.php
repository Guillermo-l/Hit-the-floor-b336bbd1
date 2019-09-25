<?php
function bereken($restBedrag, $euro)
{
    $eenheid = $restBedrag / $euro;
    $restBedrag = $restBedrag % $euro;
    $endValue = floor($eenheid);
    return $endValue;
}
$geld = [10, 5, 2, 1];

for ($i = 0; $i < count($geld); $i++) {
    $test = bereken(1, $geld[$i]);
    if ($test > 0) {
        echo $test . PHP_EOL;
    }
}