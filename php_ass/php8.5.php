<?php
$arr=array(1,2,3,4,5,6,7);
foreach($arr as $value){
if($value==4 or $value==5):
    continue;
else:
    echo $value,"\n";
endif;
}
?> 
