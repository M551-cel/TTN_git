<?php

$start = 1;
$end = 10;

$sum = 0;
for ($i = $start; $i <= $end; $i++) {
    $sum += $i;
}

echo "Sum from " . $start . " to " . $end . " = " . $sum;