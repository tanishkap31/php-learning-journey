<?php

// 1. String
$name = "Tanishka";

// 2. Integer
$age = 21;

// 3. Float
$percentage = 85.5;

// 4. Boolean
$isStudent = true;

// 5. Array
$skills = ["PHP", "MySQL", "HTML", "CSS"];

// 6. NULL
$address = null;

// Display data types
echo "Name: " . $name . " - " . gettype($name) . "\n";
echo "Age: " . $age . " - " . gettype($age) . "\n";
echo "Percentage: " . $percentage . " - " . gettype($percentage) . "\n";
echo "Student: " . $isStudent . " - " . gettype($isStudent) . "\n";
echo "Skills: " . gettype($skills) . "\n";
echo "Address: " . gettype($address) . "\n";

?>
