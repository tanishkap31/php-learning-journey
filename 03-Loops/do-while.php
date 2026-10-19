
<?php
// Do While: exit control

/* do{
    // statement:execute
}
while(con) */

 $num=1;
do{
    echo $num;
    $num++;
}
while($num<=10); 

// even or odd
 $num=6;
do{
    if($num %2 ==0){
        echo"even";
    }
    else{
        echo"odd";
    } 
    $num++;
}
while($num <=10); 

// positive negative
  $num=5;
do{
    if($num > 0){
    echo"positive";
}
elseif($num < 0){
        echo"Negative";
    }
    else{
        echo "zero";
    }
    $num++;
}
while($num <=10); 
// print no in reverse order
   $num=6;
do{
    if($num %2 ==0){
        echo"even";
    }
    else{
        echo"odd";
    } 
    $num++;
}
while($num <=10); 

// gpt throgh
$num = 10;

do {
    echo $num . "<br>";
    $num--;
} while ($num >= 1);

?>
