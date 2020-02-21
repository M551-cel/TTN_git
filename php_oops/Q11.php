class Animal{  
    void eat(){
        echo "eating...";
        }  
    }  
    class Dog extends Animal{  
    void bark(){
        echo "barking...";
        }  
    }  
    class BabyDog extends Dog{  
    void weep(){
        echo "weeping...";
        }  
    }  
    BabyDog d=new BabyDog();  
    d->weep();  
    d->bark();  
    d->eat();  
     