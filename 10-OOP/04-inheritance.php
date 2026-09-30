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
##1 Animal
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

##3 food (Exaple by jasmina)
class Food{
    public string $name;
    public int $price;

public function taste(){
    echo $this->name." tastes good\n";
}
}

class Pizza extends Food{
    public string $type;

public function size(){
    echo $this->type." size is large\n";
    echo "Price is " .$this->price;
}
}

$food = new Food();

$pizza = new Pizza();
$pizza->type = "Cheese Pizza";
$pizza->name = "pizza";
$pizza->price = 500;
$pizza->taste();
$pizza->size();


##2 Employee-Manager
class Employee{
    public $name;
    public $salary;

    public function work(){
        echo "employee is working"."\n";
    }
}

class Manager extends Employee{
    public $department;
    public function manage(){
        echo "manager is managing"."\n";
    }
}

$manager= new Manager();
$manager->name="Tanishka";
$manager->salary=50000;
$manager->department="IT";

// $manager->work();
// $manager->manage();

echo $manager->name;
echo $manager->salary;
echo $manager->department; 


// multilevel inheritance
/* Super Parent
      |
    Parent
      |
  Child class 

// example
Employee
   ↓
Manager
   ↓
SeniorManager */

class Employee {
    public $name;
    public $salary;

    public function work() {
        echo $this->name . " is working\n";
        echo "Salary is " . $this->salary . "\n";
    }
}

class Manager extends Employee {
    public $department;

    public function manage() {
        echo $this->name . " is managing\n";
        echo "Department is " . $this->department."\n";
    }
}

class SeniorManager extends Manager {
    public $experience;

    public function supervise() {
        echo $this->name . " is supervising\n";
        echo "Experience: " . $this->experience . " years\n";
    }
}
$seniorManager = new SeniorManager();

$seniorManager->name = "Tanishka";
$seniorManager->salary = 50000;
$seniorManager->department = "IT";
$seniorManager->experience = 5;

$seniorManager->work();
$seniorManager->manage();
$seniorManager->supervise();

// Hierarchical
/* One parent → multiple child classes

          Employee
          /      \
         ↓        ↓
     Manager   Developer */

class Employee{
    public $name;
    public $salary;

    public function work(){
        echo $this->name." is working \n";
        echo "Salary is ".$this->salary."\n";
    }
}
// Manager
class Manager extends Employee{
    public $department;

    public function manage(){
        echo $this->name." is managing \n";
        echo "Department is ".$this->department. "\n";
    }
}

// Developer
class Developer extends Employee{
    public $language;

    public function develop(){
        echo $this->name. " is developing \n";
        echo "Language:".$this->language."\n";
    }
}

$manager =new Manager();

$manager->name = "Tanishka";
$manager->salary = 50000;
$manager->department = "IT";

$manager->work();
$manager->manage();


$developer = new Developer();

$developer->name = "Rahul";
$developer->salary = 45000;
$developer->language = "PHP";

$developer->work();
$developer->develop();


?>
