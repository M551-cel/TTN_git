<?php 
$age = array("ayush"=>"23", "shankar"=>"47", "kailash"=>"41"); 
asort($age); 
  
foreach($age as $x => $x_value) { 
    echo "Key=" . $x . ", Value=" . $x_value; 
    echo "\n"; 
} 
?> 