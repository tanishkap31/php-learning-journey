<?php
// operators:
// 10,2 is operan nd all oprators
 $num1 =10;
$num2=20;
echo "$num1 + $num2";
echo "$num1 - $num2";
echo "$num1 / $num2";
echo "$num1 * $num2";
echo "$num1 ** $num2";
echo "$num1 % $num2";

// Assignment operators:
$num1 += 50;
echo $num1;

//comparison operator
echo 14>2;

$a = 15;
$b = 16;
var_dump($a > $b);
var_dump($a < $b);
var_dump($a >= $b);
var_dump($a <= $b);
var_dump($a != $b);
var_dump($a <=> $b);
var_dump( 3 == "3");//value and data type


//logical operator: && (and), || (or) , !
$age = 28;
$hasId = false;
var_dump($age > 18 || $hasId === true);



// incre/decre operators: counter
$a = 12;
$a++;
-- $a;
echo $a;


// String operators: ., .=
$name = "Shreya";
$surname = "Gupta\n";
echo $name." ".$surname;
$name .= " Gupta"; 
echo $name;

// ternary Operators: decision making
$age = 19;
$result = ( $age > 18)? " You can vote " : "You are not eligible";
echo $result;

/* Q1. WAP to calculate the final price of an item. Start with a price of 100 and a discount of 15%. Use arithmetic operators to calculate and print the final value.

 Q2. WAP to manipulate a player's score. Start with $score = 50. Use shorthand assignment operators to first add 20 to the score, then divide the result by 2, and print the final score.

 Q3. WAP to compare an integer PIN $secretPin = 1234 against a string input $userInput = "1234". Use var_dump() with both the equal (==) and identical (===) comparison operators to show the difference.

 Q4. WAP to check whether a number is greater or lesser than 100 using ternary operator.

 Q5. WAP to trace the behavior of increment operators. Initialize $x = 5. Assign $y = $x++ and then $z = ++$x. Print the final values of $x, $y, and $z.

 Q6. WAP to combine strings. Create variables for a first name ("John") and a last name ("Doe"). Concatenate them with a space into a single variable $fullName, then use a concatenation assignment operator to append " Jr." to the end.

 Q7. WAP to demonstrate the spaceship operator (<=>). Use it to compare 10 and 20, 20 and 20, and 30 and 20. Print the outputs consecutively.

 Q8. WAP to check user login status using a shorthand method. Evaluate a boolean variable $isLoggedIn. Use the ternary operator to assign "Welcome back!" if true, or "Please log in." if false, and print the message.

 Q9. WAP to check if a number is odd or even. Use the modulus operator (%) along with a ternary operator to evaluate $number = 15 and print whether it is "Even" or "Odd". */

// question 1
$price = 100;
$discount = 100*(15/100);
$Product_Price = $price - $discount;
echo $Product_Price;

// question 2
$score = 50;
$result = ($score + 20) / 2;
echo $result;

//question 3
$secretPin= 1234;
$userInput= "1234";
var_dump($secretPin == $userInput);
var_dump($secretPin === $userInput);

//question 4;
$a = 40;
$result = ($a <100)? "Lesser" : "Greater";
echo $result;

//question 5 
$x = 5;
$y = $x++;
$z = ++$x;
echo "$x\n";
echo "$y\n";
echo "$y";

//question 6
$firstname = "John";
$lastname =  "Doe" ;
$fullname = $firstname." ".$lastname;
echo $fullname;

//question 7
$a = 10;
$b = 20;
$c = 30;
var_dump( $a <=> $b);
var_dump($b <=> $b);
var_dump($c <=> $b);

//question 8
$isLoggedIn = true;
$result = ($isLoggedIn = false)? "Welcome Back!" : "Please Log in";
echo $result;

//question 9
$a = 17;
$result = ( $a % 2==0)? "Even" : "odd";
echo $result;


?>
