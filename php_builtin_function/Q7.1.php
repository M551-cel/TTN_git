
<?php 
  
// Function used for assigning new value to  
// $string variable and printing it 
function print_string( &$string ) { 
      
    $string = "Function geeksforgeeks \n"; 
  
    // Print $string variable 
    print( $string ); 
} 
  
// Driver code 
$string = "Global geeksforgeeks \n"; 
print_string( $string ); 
print( $string ); 
?> 
