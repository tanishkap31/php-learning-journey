<?php
/* ## Problem 1: The E-Commerce Product (Basic)
Goal: Create a class that models a store product and automatically calculates its final price including tax.
Requirements:

• Create a class named Product.
• Add three properties: $name (string), $price (float), and $taxRate (float, e.g., 0.15 for 15%).
• Create a __construct method that accepts and initializes all three properties.
• Create a method named getFinalPrice() that returns the total price (price + (price * taxRate)).
• Test it: Instantiate two different products (e.g., a "Laptop" and a "Book") with different prices and tax rates, and print out their final prices.
ANS: */
class Product {
    public string $name;
    public float $price;
    public float $taxrate;

    public function __construct($name, $price, $taxrate) {
        $this->name = $name;
        $this->price = $price;
        $this->taxrate = $taxrate;
    }

    public function getfinalPrice() {
        $totalPrice = $this->price + ($this->price * $this->taxrate);
        echo $totalPrice. "\n";
    }
}

$object = new Product("Laptop", 30000.00, 0.12);

$object->getfinalPrice();

/* ## Problem 2: Bank Account Manager (Intermediate)
Goal: Implement a simple banking system that handles deposits, withdrawals, and balance tracking using object-oriented principles.
Requirements:

• Create a class named BankAccount.
• Add three properties: $accountHolder (string), $accountNumber (string), and $balance (float).
• The __construct method should accept the holder's name and account number. Set the initial $balance to 0.0.
• Create a method named deposit($amount) that adds the amount to the balance and prints the new balance.
• Create a method named withdraw($amount) that checks if the account has enough money. If yes, deduct the amount. If not, print an "Insufficient funds" warning.
• Create a method named getBalance() to print the current statement.
• Test it: Create an account, deposit $500, try to withdraw $600 (should fail), and then successfully withdraw $200.
ANS:
 */
class BankAccount{
    public string $accountHolder;
    public string $accountNumber;
    public float $balance;

    public function __construct($accountHolder,$accountNumber,$balance)
    {
        $this ->accountHolder =$accountHolder;
        $this ->accountNumber =$accountNumber;
        $this ->balance =$balance;
    }
    public function deposit($amount){
        $this ->balance +=$amount;
    }

    public function withdraw ($amount){
        $this->balance -=$amount;
        if ($amount<= $this->balance){
            echo "deduct the amount";
        }else{
            echo "Insufficient funds";
        }
    }

    public function getBalance (){
        echo "Current Balance:". $this->balance;
    }
}

$account=new BankAccount("Tanishka",123456789,5000);
$account->deposit(1200);
$account->withdraw(8000);
$account->getBalance();

/* ## Problem 3: Student Grading System (Intermediate)
Goal: Manage student data and dynamically calculate grades based on an array of scores passed through a constructor.
Requirements:

• Create a class named Student.
• Add three properties: $studentName (string), $subject (string), and $scores (array of integers).
• The __construct method should initialize all three properties when the object is created.
• Create a method named calculateAverage() that computes and returns the average of the scores array.
• Create a method named getGrade() that calls calculateAverage() and returns a letter grade:
• 'A' for an average of 90 or above.
   * 'B' for 80 to 89.
   * 'C' for 70 to 79.
   * 'F' for anything below 70.
• Test it: Create a student named "Alex" for the subject "Math" with the scores [85, 92, 78, 90]. Print out their name, average score, and final letter grade.  
ANS:
*/

class Student {

    public string $studentName;
    public string $subject;
    public array $scores;

    public function __construct($studentName, $subject, $scores) {
        $this->studentName = $studentName;
        $this->subject = $subject;
        $this->scores = $scores;
    }

    public function calculateAverage() {
        return array_sum($this->scores) / count($this->scores);
    }

    public function getGrade() {
        $average = $this->calculateAverage();

        if ($average >= 90) {
            return "A";
        } elseif ($average >= 80) {
            return "B";
        } elseif ($average >= 70) {
            return "C";
        } else {
            return "F";
        }
    }
}

$student = new Student("Alex", "Math", [85, 92, 78, 90]);

echo "Name: " . $student->studentName . "\n";
echo "Subject: " . $student->subject . "\n";
echo "Average: " . $student->calculateAverage() . "\n";
echo "Grade: " . $student->getGrade(); 

  

?>
