<?php

//Operators
//if it takes single value it was unary (!) 
//if it takes two values it was  binary 
//if it takes three values ot was ternary

//Arithemtic Operators (+ , - , * , / , % , ** )
$x = 4;
$y = 7;

var_dump($x + $y);
echo '<br/>';
var_dump($x - $y);
echo '<br/>';
var_dump($x * $y);
echo '<br/>';
var_dump($x / $y);
echo '<br/>';

$c = 8.5;
$d = 5.67;
var_dump($c % $d); //if the  input may be the floats , it will return as an inte , to avoid this have to use "fmod()"
echo '<br/>';
var_dump(fmod($c, $d));
echo '<br/>';
var_dump($x ** $y);
echo '<br/>';

#typecasting: if we put + or - it will convert to int 
$z = "3";
var_dump(+$z);
echo '<br/>';

$a = 3;
$b = 0;

//echo $a/$b;//it it will give an error , because can't able to divide by 0
echo fdiv($a, $b); //it will give "INF" 
echo '<br/>';

//Assignment Operators ( = , += , -= , *= , /= , %= , **=)

$e = ($f = 12) + 2;

echo $e, ",", $f;
echo '<br/>';
echo $e += 3; //if may be e variable not declared it will undefined waring with value 3
echo '<br/>';
echo $e -= 3;
echo '<br/>';
echo $e *= 3;
echo '<br/>';
echo $e /= 3;
echo '<br/>';
echo $e %= 3;
echo '<br/>';
echo $e **= 3;
echo '<br/>';

//String Operators (. *=)

$dep = "PHP";

echo $dep . " Programming";
echo '<br/>';
echo $dep .= " Programming";
echo '<br/>';

//Comparison operators (== , === , != , <> , !== , <> , < , > , >= , <= , <=> , ?? , ?:)

$e = '4';
$f = 4;

var_dump($e == $f); //loose comparison,doesn't check data types
echo '<br/>';
var_dump($e === $f); //strict comparison ,do check data types
echo '<br/>';
var_dump($e != $f); //loose comparison,doesn't check data types;
echo '<br/>';
var_dump($e !== $f); //strict comparison ,do check data types
echo '<br/>';
var_dump($e <> $f);
echo '<br/>';
var_dump($e < $f);
echo '<br/>';
var_dump($e > $f);
echo '<br/>';
var_dump($e >= $f);
echo '<br/>';
var_dump($e <= $f);
echo '<br/>';
var_dump($e <=> $f);
echo '<br/>';
var_dump(0 == "Hello"); // false: in php 8 , the number converted to string for comparion "0" == "Hello", brfore php 8 , the string will be converted into numeric 
echo '<br/>';
var_dump(0 == "0"); // true: if the string was numeric ,it will converted to number
echo '<br/>';

// always recommended to use the strict mode
$word = "Hello world";
$findPosition = strpos($word, "H");

//here if we use == it will fasle because of loose comparison
//if we use === (strict comparison) it will be true  
// H is in the index of 0 , so 0 will be mean to "false" , if we use strict comparison we can avoid this 
if ($findPosition === false) {
    echo "H not found";
} else {
    echo "H found at index $findPosition";
}
echo '<br/>';

// ?? and ?: are Conditional operators
// ?: ( Ternary Operator ,it expects 3 values (condition , true expression , false expression))

$result = ($findPosition === false) ? "H not found" : "H found at index " . $findPosition;

echo $result;
echo '<br/>';

// ?? (null coalescing operator)
//it's used to provide a default value for a variable or expression if the original value is null or doesn't exist

$sivan = null; //if this variable null or doesn't exist 
$god = $sivan ?? "Human";

echo $god;
echo '<br/>';
var_dump($god);
echo '<br/>';

$sivan = true; //if this variable have value 
$god = $sivan ?? "Human";

echo $god;
echo '<br/>';
var_dump($god);
echo '<br/>';

//Error Control Operators ( @ )

//$x=file("notes.txt"); it will give an error ,because there is no file is exist on that name
$x = @file("notes.txt"); //it will surpass that error 

//Increment and Decrement Operator
//only affect number , strings and null 

$num = 7;
echo $num;
echo '<br/>';

echo $num++; //firt it will assign a value then it will increment its value
echo '<br/>';
echo $num;
echo '<br/>';
echo ++$num; //first it will increment then it will assign a value
echo '<br/>';
echo $num;
echo '<br/>';
echo $num--;
echo '<br/>';
echo $num;
echo '<br/>';
echo --$num;
echo '<br/>';
echo $num;
echo '<br/>';

$num1 = null;
echo ++$num1; //increment makes null to 1 ,but decrement don't affect 
echo '<br/>';

$letters = "abc";
echo ++$letters; //it will increment abc to abd , but decrement not affect this string 
echo '<br/>';

//Logical Operators ( && , || , ! (unary operator) , and , or , xor )

$num1 = true;
$num2 = false;

var_dump($num1 && $num2);
echo '<br/>';
var_dump($num1 || $num2);
echo '<br/>';
var_dump(!$num1 && $num2); // ! -> it will make the expression true if it was false
echo '<br/>';
var_dump(!$num1 || $num2);
echo '<br/>';
var_dump($num1 and $num2);
echo '<br/>';
var_dump($num1 or $num2);
echo '<br/>';
var_dump($num1 xor $num2); //XOR (exclusive or) -> it returns if exactly one operand is true, if both are true or neither are true ,it returns false
echo '<br/>';

//Bitwisw operators ( & , | , ^ (xor) , ~ , << , >> ) 

$num3 = 6;
$num4 = 3;

// 110  = 6
// $    
// 011  = 3
// ----
// 010  = 2 
echo $num3 & $num4; //output is 2
echo '<br/>';
echo $num3 | $num4; //output is 7
echo '<br/>';
echo $num3 ^ $num4; //output is 5
echo '<br/>';
echo (~$num3 & $num4); //flips the bits
echo '<br/>';
echo $num3 << $num4; //shift bits to the left
echo '<br/>';
echo $num3 >> $num4; //shift bits to the right
echo '<br/>';

//Array Operators ( + , == , === , != , <> , !==)

$array1 = [1, 2, 3];
$array2 = [1, 2, 3, 5, 8];

print_r($array1 + $array2); //it will not append if it have same index number 
echo '<br/>';

$array1 = ["a" => 1, "b" => 2, "c" => 3];
$array2 = ["d" => 1, "e" => 2, "f" => 3, "g" => 5, "h" => 8];

print_r($array1 + $array2); //it will not append if it have same index number 
echo '<br/>';

$array1 = [1, 2, 3, 4];
$array2 = [1, 2, 3];

print_r($array1 == $array2);
echo '<br/>';
print_r($array1 === $array2);
echo '<br/>';
print_r($array1 != $array2);
echo '<br/>';
print_r($array1 !== $array2);
echo '<br/>';
