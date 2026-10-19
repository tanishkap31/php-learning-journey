<?php
// switch:

 $dayOfWeek=9;
switch($dayOfWeek) {
    case 1: echo"Sunday";
        break;
    case 2: echo"Monday";
        break;
    case 3: echo"Tue";
        break;
    case 4: echo"Wed";
        break;
    case 5: echo"Thu";  
        break;
    case 6: echo"Fri";
        break;
    case 7: echo"Sat";
        break;
    default :echo"Use value from 1-7";
} 
    
// Calculator-arithmetic cal
 $arithmetic_cal=3;
switch($arithmetic_cal) {
    case 1: echo"Addition(+)";
        break;
    case 2: echo"Substraction(-)";
        break;
    case 3: echo"Multiplication(*)";
        break;
    case 4: echo"Division(/)";
        break;
    case 5: echo"Module(%)";  
        break;
    case 6: echo"(**)";
        break;
    
    default :echo"Use values from 1-12 only";
} 

 $num1 = 4;
$num2 = 6;
$operator ="add";
switch($operator) {
    case "add": 
        $result=$num1+$num2;
        echo $result;
        break;
    case "sub": 
        $result=$num1-$num2;
        echo $result;
        break;
    case "mul": 
        $result=$num1*$num2;
        echo $result;
        break;
    case "div": 
        $result=$num1/$num2;
        echo $result;
        break;
    case "module": 
        $result=$num1%$num2;
        echo $result;
        break;
    default :echo"Use values from 1-12 only";
} 



// month ja to dec
 $month=9;
switch($month) {
    case 1: echo"Jan";
        break;
    case 2: echo"Feb";
        break;
    case 3: echo"Mar";
        break;
    case 4: echo"Apr";
        break;
    case 5: echo"May";  
        break;
    case 6: echo"Jun";
        break;
    case 7: echo"Jul";
        break;
    case 8: echo"Aug";
        break;
    case 9: echo"Sep";
        break;
    case 10: echo"Oct";
        break;
    case 11: echo"Nov";
        break;
    case 12: echo"Dec";
        break;
    default :echo"Use values from 1-12 only";
} 

// mon-fri: working day, sa-sun:weekend
 $Color=" Yellow";
Switch($Color){
    case"Blue":
    case"Pink":
    case"Yellow":
    case"Purple":
    case"Green":
        echo"These shade of colors";
        break;
    case "Black":
    case "White":
        echo"Most used colors";
        break;
    default: echo"use types of color";
    }
 
?>
