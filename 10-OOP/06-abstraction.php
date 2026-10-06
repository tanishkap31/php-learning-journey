<?php
// 1]Abstraction:security,hide the complexity, implementation hidden
// foundation for the childe classes

// abstraact class,interface

// abstract class: data members,functions,objects cannot be creaate

 abstract class Vehicles{
    public $name;
    public function start(){
        echo "The vehicle starts";
    }
    abstract public function stop();
}
// concrete class
class Car extends Vehicles{
    public function start(){
        echo "The Car starts \n";
    }

    public function stop(){
        echo "car stop \n";
    }
}

$car=new Car();
$car->start();
$car->name="BMW \n";
echo $car->name;
$car->stop(); 

// Abstract -employee,concrete- developer,tester,tech suppourt

abstract class Employee{
    public $name;
    public $role;

    public function Name(){
        echo "Name the Employee:".$this->name."\n";
    }

    abstract public function Role();
}
class Developer extends Employee{
    public function Role(){
        echo "Employee Role:".$this->role."\n";
    }
} 

class Tester extends Employee{
    public function Role(){
        echo "Employee Role:".$this->role."\n";
    }
} 
class Tech_Suppourt extends Employee{
    public function Role(){
        echo "Employee Role:".$this->role."\n";
    }
} 

$developer=new Developer();
$developer->name="Tanishka";
$developer->role="Developer";
$developer->Name();
$developer->Role();

$tester=new Tester();
$tester->name="Jasmina";
$tester->role="Tester";
$tester->Name();
$tester->Role();

$techsupport=new Tech_Suppourt();
$techsupport->name="Shreya";
$techsupport->role="TechSupport";
$techsupport->Name();
$techsupport->Role(); 

// application: user differt ways mai login[email id,user id,contact,fingerprint]

abstract class Application{

    public $userId;
    public $password;
    public $email;
    public $phone;


     public function UserId(){
        echo "UserId:".$this->userId."\n";
        
     }

     abstract public function LogIn();
}


class Instagram extends Application{
    public function LogIn(){
        // echo "Login with Instagram:".$this->password."\n";
        $res=($this->password == 1234)?"Instagram Login Successful\n":"Invalid Instagram Password\n";
        echo $res;
     } 
     public function LogOut(){
        echo "LogOut Instagram \n\n";
     } 
}
class Whatsapp extends Application{
    public function LogIn(){
        // echo "Login with Whatsapp:".$this->phone."\n";
         $res=($this->phone == 8421490719)?"Whatsapp Login Successful\n":"Invalid Whatsapp Password\n";
        echo $res;
     } 
       public function LogOut(){
        echo "LogOut Whatsapp \n\n";
     } 
}
class Zepto extends Application{
    public function LogIn(){
        // echo "Login with Zepto:".$this->email."\n";
         $res=($this->email == "abc123@gmail.com")?"Zepto Login Successful\n":"Invalid Zepto Password\n";
        echo $res;
     } 
     public function LogOut(){
        echo "LogOut Zepto\n\n";
     } 
}

// Password
$instagram=new Instagram();
$instagram->userId="Jasmina";
$instagram->password="fg";
$instagram->userId();
$instagram->LogIn();
$instagram->LogOut();

// Phone
$whatsapp=new Whatsapp();
$whatsapp->userId="tanishka";
$whatsapp->phone=8421490719;
$whatsapp->userId();
$whatsapp->LogIn();
$whatsapp->LogOut();

// Email
$zepto=new Zepto();
$zepto->userId="tanishka";
$zepto->email="abc123@gmail.com";
$zepto->userId();
$zepto->LogIn();
$zepto->LogOut();

// polymorphism + abstraction

abstract class Apps{

public $input = [];
abstract public function credentials();
}

class Linkedin extends Apps {

    public $credentials = [
        "username" => "Tanishka",
        "password" => 12345
    ];

    public $input = [];

    public function credentials() {
        
        echo "Username: " . $this->input["username"] . "\n";
        echo "Password: " . $this->input["password"] . "\n";

    
        $res=($this->input["username"] == $this->credentials["username"] &&
            $this->input["password"] == $this->credentials["password"])? "LinkedIn Login Successful\n": "Invalid Username or Password\n";
            echo $res;
    }
    
}

class WhatsApp extends Apps {

    public $credentials = [
        "phone" => 84214907919,
        "otp" => 150357
    ];

    public $input = [];

     public function credentials() {

        echo "WhatsApp Login\n";

        echo "Phone: " . $this->input["phone"] . "\n";
        echo "OTP: " . $this->input["otp"] . "\n";

        $res=($this->input["phone"] == $this->credentials["phone"] &&
            $this->input["otp"] == $this->credentials["otp"])? "WhatsApp Login Successful\n": "Invalid Phone Number or OTP\n";
        echo $res;
    }
}

$linkedin = new Linkedin();

$linkedin->input["username"] = "Tanishka";
$linkedin->input["password"] = 12345;
$linkedin->credentials();

$whatsapp = new WhatsApp();

$whatsapp->input["phone"] = 8421490719;
$whatsapp->input["otp"] = 150357;
$whatsapp->credentials();




?>
