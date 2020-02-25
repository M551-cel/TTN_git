
<?php 
// specifying directory 
$mydir = '/home'; 
  

$myfiles = scandir($mydir, 1); 
  
//displaying the files in the directory 
print_r($myfiles); 
?> 
