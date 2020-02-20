<?php  
abstract class a  
{  
abstract public function dis1();  
abstract public function dis2();  
}  
class b extends a  
{  
public function dis1()  
    {  
        echo "abstaract1";  
    }  
    public function dis2()  
    {  
        echo "abstract2";     
    }  
}  
$obj = new b();  
$obj->dis1(); 
echo "\n"; 
$obj->dis2();  
?>  