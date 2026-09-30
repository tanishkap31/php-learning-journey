<?php 
##class:A class is a user-defined blueprint or template used to create objects, bundling data (properties) and behavior (methods) into a single reusable unit.

// class -desing

 class student{
  // prperties/data- variables
  public $name;
  public $age;
  public $gender;
  public $email;
  public $city;

  // behavior /action

  public function study(){
    echo "I am studying";
  }
  
}
//  object: real word entity
$tan=new student();
$tan-> name="tan";
$tan-> age=21;
$tan-> gender="F";
$tan-> email="tanip31@gmail.com";
$tan-> city="Palghar";

// print the obj
print_r($tan);
echo $tan->age;

// $jas=new student();
// $shre=new student();
// $rosh=new student(); 

## Student 
class student{
  public $name;

  public function study(){
    echo $this -> name." is studying";
  }
  
}
$tan=new student();
$tan-> name="tanishka";
$tan-> study(); 

## -Registration

class Registration{
  public $username;
  public $useremailid;
  public $age;
  public $contact;


  public function register(){
    echo $this-> username." is the user name\n";
    echo $this-> useremailid." is the user id\n";
    echo $this-> age." is the user age\n";
    echo $this-> contact." is the user contact\n";
  }
}

$name= new Registration();
$name->username="Tanishka";
$name->useremailid="tanip31@gmail.com";
$name->age=21;
$name->contact=1234567891;
$name-> register(); 
// print_r($name);



?>
