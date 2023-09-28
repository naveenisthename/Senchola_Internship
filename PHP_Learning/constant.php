<?php
/*
 -Constant are unchangeable , can't able to override
 -Constants are typically defined using UPPER Case letters 
 =they contain letters,number and underscores 
 -Unlike variable, Constants do not have a dollor("$") sign before their name  
 -can't able to contain any special characters,spaces and punctuation symbols
 -case sensitive
 -Achieved by using "define()" or "const" Keyword 
 -not work when we use define() and const at a same time 
*/

// 1.Achieved by using "define()" (defined at a run time)
define("PAID_STATUS","paid");
echo PAID_STATUS;

$paid="PAID";
define("STATUS_PAID", $paid);
echo STATUS_PAID;


/*
If it give 1 (True) , that's mean it was defined already
if it not give anything , that's mean it was not defined 
*/ 
echo defined('PAID_STATUS');

// 2.Acheived by using "const" Keyword (defined at Compile time) 
const NATIONALITY="Indian";
echo NATIONALITY;

//Predefined Constants

echo PHP_VERSION;

//Magical Constants -There value can actucally change , depends on where we can use 

echo __LINE__; //It will change its value, if we use it in any other line  
echo __FILE__;   


?>