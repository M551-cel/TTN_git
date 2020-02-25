<?php
class factorial_of_a_number
{
  protected $_n;
  public function __construct($n) //constructor to initialization
   {
     if (!is_int($n))
	   {
	      throw new InvalidArgumentException('Not a number or missing argument');
       }
    $this->_n = $n;
	}
  public function result()  //a method to find factorial
    {
     $factorial = 1;
     for ($i = 1; $i <= $this->_n; $i++)
	  {
	    $factorial *= $i;
      }
	   return $factorial;
	 }
 }

$newfactorial = New factorial_of_a_number(5);
echo $newfactorial->result();
?>