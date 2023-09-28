<?php

//NULL = null value

$x=null;
echo $x.'<br/>'; //it will cast to string and the string will be empty string,that's why in the screen it was empty 
echo var_dump($x).'<br/>'; 
echo var_dump(is_null($x)).'<br/>';
echo ($x===NULL).'<br/>';

echo var_dump($y).'<br/>'; // $y is still not defined , but it will give NULL with warning
echo var_dump(is_null($y)).'<br/>'; 

$num=123;

echo var_dump($num).'<br/>';
unset($num); // unset will destroy the variable
echo var_dump($num).'<br/>'; // it will be null

//typecasting
//Usecase : if we don't know the value of variable  
$name=null;

echo (string)$name.'<br/>';//it will cast to string and the string will be empty string,that's why in the screen it was empty 
echo var_dump((string)$name).'<br/>'; 
echo var_dump((int)$name).'<br/>'; 
echo var_dump((array)$name).'<br/>'; 

?>