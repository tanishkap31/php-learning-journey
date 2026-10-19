<?php
// loops: repeatitive
// print num 1 to 10
echo 1;
echo 2;
echo 3;
echo 4;
echo 5;
echo 6;
echo 7;
echo 8;
echo 9;
echo 10; 
// while: entry control
$count=1;
while($count<=10){
    echo $count;
    $count++;

} 

// reverse 10 to 1
$count=10;
while($count>=1){
    echo $count;
    $count--;

} 


   // print hello words 5 times

 $name=1;
while($name<=5){
    echo "Hello words";
    $name++;

}  

// print 1 to 10 but skip 5: continue
 $count=1;
while($count<=10){
    if($count ==6){
        $count++;
        continue;
    }
    echo $count;
    $count++;

}
    // another way using
    $count=1;
while($count<=10){
    if($count ==6){
        $count++;
    }else{
        echo $count;
        }
    $count++;

}
 
// break
 $count=1;
while($count<=10){
    if($count ==6){
        $count++;
        break;
        
    }
    echo $count;
    $count++;

} 
//
 $count=1;
while($count<=5){
    if($count ==3){
        // $count++;
        // break;
        
    }else{
        echo $count;
    }
    $count++;

} 

// multiplication table using the loop
// 5*1
 $table=1;
while($table<=10){
        echo 5*$table;
        $table++;
    }
 

/* Challenge 1: The "Lucky 7" Search
Goal: Loop through numbers from 1 to 100. Find the first number
that is perfectly divisible by 7 and stop the loop immediately using break.
Expected Output: 7 */

  
 $count=1;
while($count<=100){
    echo 7/$count;
    break;
        
    } 

   /* Challenge 2: Evens Only (No Odds Allowed)
Goal: Print all numbers from 1 to 20,
but use the continue statement to skip over every odd number.
Expected Output: 2 4 6 8 10 12 14 16 18 20 */

    $count=1;
while($count<=20){
    if($count%2!=0){
        $count++;
        continue;
    }else{
        echo $count;
    }
    $count++;
}  

/* Challenge 3: Countdown with a Twist
Goal: Create a countdown from 10 down to 1.
Use continue to skip the number 5. */

 $count=10;
while($count>=1){
    if($count ==5){
        $count--;
        continue;
    }else{
        echo $count;
    }
    $count--;

} 

?>
