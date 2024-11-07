<?php
$FIzz="Fizz";
$Buzz="Buzz";
$FizzBuzz="FizzBuzz";

for ($i = 1; $i <=50; $i++) {
 if ($i % 3 === 0) {
 echo $FIzz ;
   echo "<br />";
 }elseif ($i % 5 === 0){
 echo $Buzz;
   echo "<br />";
 }elseif ($i % 15 === 0){
 echo $FizzBuzz;
   echo "<br />";
 }else{
 echo  $i;
   echo "<br />";}
 }