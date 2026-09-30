<?php
// 30/09/2026
// polymorphism: many forms
// object having many forms
// two types of poly  runtime nd Compiler time

class  Animal{
    public function sound(){
        echo "Animal makes sound";
    }
}
class Dog extends Animal{
    public function sound(){
        echo "cat makes sound";
    }
}
 $animal = new Animal();
 $animal->sound();

 $dog = new Dog();
 $dog->sound(); 

## using class outside a polymorphism function

class  Animal{
    public function sound(){
        echo "Animal makes sound";
    }
}
class Dog extends Animal{
    public function sound(){
        echo "cat makes sound";
       
    }
}

    function makeSound(Animal  $animal){

        $animal->sound();
    }

 $animal = new Animal();
//  $animal->sound();

 $dog = new Dog();
//  $dog->sound();


makeSound($animal);
makeSound($dog); */

/* Scenario:
You are building a minimalist backend processing engine for a shopping cart. The 
system handles standard products and digital downloadable products. Every product 
needs its sensitive structural data secured from direct external tampering, must 
reuse core pricing logic, and must generate customized checkout descriptions seamlessly.

Requirements:
1. Encapsulation: Create a base class named 'Product'.
   - Protect the internal properties '$title' (string) and '$basePrice' (float/int) 
     so they cannot be directly reassigned from outside the class instance.
   - Implement a constructor to initialize these values.
   - Expose public getter methods to fetch the title and base price securely. 
   - Add a validation setter rule for '$basePrice': it must throw an Exception 
     if someone tries to update the price to a negative value.
2. Inheritance: Create a child class named 'DigitalProduct' that extends 'Product'.
   - It needs an exclusive property for '$downloadLimit' (integer).
   - Implement its own constructor that correctly handles passing the title and 
     base price up to the parent constructor while mapping its unique download limit.
3. Basic Polymorphism: Both classes must expose a method named 'getBillDetails()'.
   - For a standard 'Product', it returns: "Product: [Title] - Cost: $[Base Price]"
   - For a 'DigitalProduct', override the method so it returns: 
     "Digital: [Title] - Cost: $[Base Price] (Downloads remaining: [Download Limit])" 
ANS:
     
     */
class Product{
    protected string $title;
    protected float $basePrice;

    public function __construct($title, $basePrice)
    {
        $this->title=$title;
        $this->basePrice = $basePrice;
    
    }

    public function getTitle(){
        return $this->title;
    }

    // public function setTitle($title){
    //     $this->title = $title;
    // }

    public function getBasePrice(){
        return $this->basePrice;
    }

    public function setBasePrice($basePrice){
         if($basePrice < 0){
        echo ("Invalid Price");
    } else {
        $this->basePrice = $basePrice;
    }
    }
    public function getBillDetails() { 
        return "Product: {$this->title} - Cost: \${$this->basePrice}";
         }
}

class DigitalProduct extends Product{
    public int $downloadLimit;
    public function __construct($title, $basePrice, $downloadLimit)
    {
        parent::__construct($title, $basePrice);
        $this->downloadLimit=$downloadLimit;
    }
    public function getBillDetails() { 
        return "Digital: {$this->title} - Cost: \${$this->basePrice} (Downloads remaining: {$this->downloadLimit})"; 
    }
}

$object1=new Product ("Laptop",60000);
$object2=new DigitalProduct ("Phone",-60000,2);
echo $object1->getBillDetails()."\n";
echo $object2->getBillDetails()."\n";

$object2->setBasePrice(-5000);

?>
