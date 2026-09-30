<?php

    /*  Child 
         ↓
        Parent */

/* class Parent {
    // properties
    // methods
}

class Child extends Parent {
    // child properties
    // child methods
} */

class Animal{
    public $name;
    public $color;
    
    
    public function sound(){
        echo " make sound";
    }
}
class Lion extends Animal{
    public $type;

    public function run(){
        echo "Lion run fast";
    }
}
$animal= new Animal();
$animal->name="mammals";
// $animal->sound();

$lion =new Lion();
$lion ->type="wild";
$lion->run();

$lion->name="simba";
$lion->color="white";
$lion->sound();

?>
