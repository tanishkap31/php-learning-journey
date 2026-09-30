<?php

class Student{
    public $name="Himesh";   //db
    public function greeting($name){
        echo $name." welcome";
    
    }
}
$himesh =new Student();
$himesh -> greeting=("tanu"); */


// constructor: no needed to call function [special method]
class Student{
    public $name;   //db
    public $age;
    public $city; 
    public $qualification;

    public function __construct($name,$age,$city,$qualification)
    {
       $this->name=$name;
       $this->age=$age;
       $this->city="Palghar";
    }
}

// default constructor
// $himesh =new Student();

// parameterised constructor: to manual one line
$himesh =new Student("Himesh",23,"Palghar","Graduate");
print_r($himesh);
// $himesh -> name="Himesh";
// $himesh -> age="23";
// $himesh -> city="HPalghar";
// $himesh -> qualification="Graduate";


// two constructor to using here
// but we must be use only one constructor in one code

##
class User{
    public $name;   //db
    public $email;
    public $contact; 
    public $password;
    public $role;

    public function __construct($name,$email,$contact,$password,$role)
    {
       $this->name=$name;
       $this->email=$email;
       $this->contact=$contact;
       $this->password=$password;
       $this->role=$role;
    }
    public function __construct($name,)
    {
       $this->name=$name;
    }
 
}

$himesh =new User ($name,$email,$contact,$password,$role);
// $himesh =new User("Himesh");
print_r($himesh);*/

##
class User{
    public $name;   //db
    public $email;
    public $contact; 
    public $password;
    public $role;

    public function __construct($name,$email,$contact,$password,$role)
    {
       $this->name=$name;
       $this->email=$email;
       $this->contact=$contact;
       $this->password=$password;
       $this->role=$role;
    }
}
// user input
$name = readline("Enter Name: ");
$email = readline("Enter Email: ");
$contact = readline("Enter Contact: ");
$password = readline("Enter Password: ");
$role = readline("Enter Role: ");

$himesh =new User ($name,$email,$contact,$password,$role);
print_r($himesh); */

?>
