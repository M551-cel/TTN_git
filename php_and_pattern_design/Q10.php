<?php
function f1($v)
{
return ($v+10);
}
function f2($v1,$v2)
{
if($v1==$v2)
return 1;
else return 0;
}
$arr1=array(1,2,3,4,5,6);
$arr2=array(2,3,3,1,5,7);
print_r(array_map("f1",$arr1));
echo"\n \n";
print_r(array_map("f2",$arr1,$arr2));
echo"\n \n";