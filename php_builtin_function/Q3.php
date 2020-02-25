
<?php    
  $file_pointer = fopen('gfg.txt' , w);  
  fwrite($file_pointer, 'A computer science portal for geeks!');  
  fclose($file_pointer);  
  unlink('gfg.txt');  
    
?> 