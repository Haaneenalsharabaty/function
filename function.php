<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h1>Q1</h2>";
echo"<br>";

   function year_check($my_year){
      if ($my_year % 400 == 0)
         print("It is a leap year");
      else if ($my_year % 100 == 0)
         print("It is not a leap year");
      else if ($my_year % 4 == 0)
         print("It is a leap year");
      else
         print("It is not a leap year");
   }
   $my_year = 2024;
   year_check($my_year);
   echo $my_year;



   echo "<h1>Q2</h2>";
echo"<br>";
function season_check($temperature){
    if ($temperature <20)
       print("It is winter Time");
    else
       print("It is summer Time");
   
 }
 $temperature  = 28;
 season_check($temperature);
 


 echo "<h1>Q3</h2>";
 echo"<br>";
 function sum($num1,$num2){
     if ($num1===$num2){
         $ruselt=($num1+$num2)*3;
         echo $ruselt;
     }
     else{
          $ruselt=$num1+$num2;
          echo $ruselt;
     }
 }
 $num1=2;
 $num2=2;
 sum($num1,$num2);



 echo "<h1>Q4</h2>";
 echo"<br>";
 function sum_number($num1,$num2){
    if ($num1+$num2===30){
        $ruselt=($num1+$num2);
        echo $ruselt;
    }
    else{
        
         echo "false";
    }
}
$num1=10;
$num2=10;
sum_number($num1,$num2);


echo "<h1>Q5</h2>";
 echo"<br>";
 function multiple_three($num1){
    if ($num1%3===0)
       print("true");
    else 
    {
        print("false");
    }
 }
 $num1 = 20;
 multiple_three($num1);
 


 
echo "<h1>Q6</h2>";
echo"<br>";

function range1($num1,$num2,$num){
   if($num >= $num1 && $num <= $num2){
      echo "true";
  } else {
      echo "false";
  }
};
$num1 = 20;
$num2=50;
$num=50;
range1($num1,$num2,$num);


echo "<h1>Q7</h2>";
echo"<br>";
function max1($num1,$num2,$num3){
$numbers = [$num1,$num2,$num3];
echo max($numbers);
}
$num1 = 1;
$num2=5;
$num3=9;
max1($num1,$num2,$num3);



echo "<h1>Q8</h2>";
echo"<br>";
function bill($num){

if($num <= 50){
    echo $num * 2.5;
} elseif ($num <= 150){
    echo (50*2.5 + ($num-50)*5);
} elseif($num <= 250){
    echo (50*2.5 + 100*5 + ($num-150)*6.2);
} else {
    echo (50*2.5 + 100*5 + 100*6.2 + ($num-250)*7.5);
}
}
$num=40;
bill($num);




echo "<h1>Q9</h2>";
echo"<br>";
function calculater($num1,$num2,$sign){
   if($sign=="+"){
   echo $num1+$num2;}
   elseif($sign=="-"){
   echo $num1-$num2;}
   elseif($sign=="/"){
   echo $num1%$num2;}
   elseif($sign=="*"){
   echo $num1*$num2;}
}
calculater(2,3,"*");



echo "<h1>Q10</h2>";
echo"<br>";

function allow($age){

if ($age >= 18)
    echo "<p>Eligable To vote</p>";
else
    echo "<p>is not Eligable To vote!</p>";}
    allow ($age = 15);


    echo "<h1>Q11</h2>";
echo"<br>";

function check($num){
   
    if($num > 0){
        echo "positive";
    } elseif($num < 0){
        echo "negative";
    } else {
        echo "number is zero";
    }}
    $num = -60;
    check($num) ;



    echo "<h1>Q12</h2>";
    echo"<br>";
   function avg($grades)
    {
       
    
    $average = array_sum($grades) / count($grades);
    if($average < 60){
        echo "F";
    } elseif($average <70){
        echo "D";
    } elseif($average < 80){
        echo "C";
    } elseif($average < 90){
        echo "B";
    } elseif($average < 100) {
        echo "A";
    }}
    $grades = [60,86,95,63,55,74,79,62,50];
    avg($grades);

    
?> 
    
</body>
</html>