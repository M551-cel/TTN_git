<?php
$arr1 = [1, 2, 3];

$arr2 = [...$arr1];

$arr3 = [0, ...$arr1];

$arr4 = array(...$arr1, ...$arr2, 111);
echo $arr2,"\n",$arr2,"\n",$arr3;
?>
