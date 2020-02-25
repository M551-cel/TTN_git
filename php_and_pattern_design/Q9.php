<?php
class A {
    public $a;
    private $b;
    public function __construct($a,$b){
        $this ->$a=$a;
        $this ->$b=$b;
    }
}
class B extends A{
    public $c=10;
    public function disp(){
        echo "$a";
        echo "$b" //invalid because variable b is private member and it's scope is within class.
    }
} 

obj1=new A(3,2);
obj2=new B();
echo obj1->$a;
echo obj2->disp();
