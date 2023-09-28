<?php

declare(strict_types=1);
/*
DATA TYPES & Type Casting:
-Scaler Types:
 -bool,
 -int,
 -float,
 -string
*/

$completed = true;
echo $completed . '<br/>';
$mark = 99;
echo $mark . '<br/>';
$weight = 45.7;
echo $weight . '<br/>';
$greeting = "Best Wishes";
echo $greeting . '<br/>';

unset($weight); //delete the variable

echo var_dump($mark) . '<br/>';
echo gettype($completed) . '<br/>';


#Compound Types:
#array
#object
#callable
#iterable

$classroom = [1, 2, "Siva", true];
print_r($classroom);
echo '<br/>';


//Special Types:
//resource 
//null

//Typecasting

$num = 5.5;
$num = (int)$num; //$num=(int) 5; 
var_dump($num);
echo '<br/>';



function sum(int $x, int $y)
{
   return $x + $y;
}

echo sum(4, 4) . '<br/>';
