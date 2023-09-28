<?php

#Arrays

$progrmminglanguages = ["Java", "Python", "PHP"];

echo '<pre>';
print_r($progrmminglanguages) . '<br/>';
echo '</pre>';

echo $progrmminglanguages[2] . '<br/>';
echo var_dump(isset($progrmminglanguages[2])) . '<br/>';

$progrmminglanguages[1] = "Javascript";
print_r($progrmminglanguages);
echo '<br/>';

echo count($progrmminglanguages); //to find the length
echo '<br/>';

$progrmminglanguages[] = " C++";
print_r($progrmminglanguages);
echo '<br/>';

array_push($progrmminglanguages, "C", "Kotlin");
echo '<br/>';
print_r($progrmminglanguages);
echo '<br/>';
echo count($progrmminglanguages);
echo '<br/>';

//To create a own keys in Array

$names = [
    "Naveen" => "Devloper",
    "Rajesh" => "Cook",
    "Siva" => "Driver"

];

print_r($names);
echo '<br/>';
echo $names["Naveen"];

$names["Karuna"] = "Engineer";

$newName = "Kiran";
$names[$newName] = "Pilot";
print_r($names);
echo '<br/>';
echo $names["Karuna"];
echo '<br/>';
echo $names[$newName];
echo '<br/>';

//MultiDimensional Array
$Students = [
    "Priyan" => ["ID" => 1, "Grade" => "1st Grade", "State" => "TamilNadu", "isPublic" => true, "mob" => 7363883932],
    "Iniyan" => ["ID" => 3, "Grade" => "2nd Grade", "State" => "Kerala", "isPublic" => true],
    "Rajan" => "Teacher"
];

echo '<pre>';
print_r($Students);
echo '</pre>';
echo '<pre>';
print_r($Students["Priyan"]);
echo '</pre>';
echo '<br/>';
echo ($Students["Priyan"]["State"]);


$array = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd', null => 'e'];
//there can only be a one element with the same key as '1' ,so, 'a','b','c'c were overwritten,leaving 'd' in the final array with key 1
print_r($array);
echo '<br/>';
echo $array[null];
echo '<br/>';

$number = [1, 2, "50" => 3, 5, 6];
print_r($number); // here the 50 is the highest array key, so it will continue after that 51,52 ...  as an array keys  
echo '<br/>';

echo array_pop($number); //remove the last element 
echo '<br/>';
print_r($number);
echo '<br/>';
echo array_shift($number); //remove the first element
echo '<br/>';
print_r($number); //it will reindexed(only numerics not an strings) the array
echo '<br/>';

$arrayNew = [1, 2, 3, 4, 5];
unset($arrayNew[0], $arrayNew[1], $arrayNew[2]); //destroy the elements
//unset($array1);//destroy the array
echo '<pre>';
print_r($arrayNew);
echo '</pre>';
echo $arrayNew[] = 7;
echo '<pre>';
print_r($arrayNew); //it will continue from its's maximum index value,it don't again start with index 0
echo '</pre>';

//Typecasting
$j = 4;
var_dump((array)$j);
echo '<br/>';

$k = null;
var_dump((array)$k);
echo '<br/>';

$random = ["a" => 11, "b" => null];

var_dump(array_key_exists("a", $random));
echo '<br/>';
var_dump(array_key_exists("b", $random)); //it will give true for a null
echo '<br/>';
var_dump(isset($random["a"]));
echo '<br/>';
var_dump(isset($random["b"])); //it will give false for a null
echo '<br/>';
