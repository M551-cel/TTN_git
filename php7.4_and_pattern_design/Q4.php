<?php
function getArray(){
    return['a','b'];
}
function merge() {
    $arr1 = [1,2,3];
    $arr2 =[getArray(), ...$arr1];
    $arr3=[...$arr2, 4,5,6];
    return $arr3;

}
print_r( merge());
?>