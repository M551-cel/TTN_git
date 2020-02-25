<?php
$str1= '082307'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
?>