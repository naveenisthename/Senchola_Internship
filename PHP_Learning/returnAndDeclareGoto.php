<?php

//Return , Declare and Goto


declare(strict_types=1);
//on the strict mode 
//it only applies to this file
//it should be top on the file


#Return
function sum(int $x, int $y)
{
    $z = $x + $y;
    return $z;
}

echo sum(7, 8) . "<br/>";

//return; if we put return in global expressiom after whatever that program have it don't print
echo " Hello world.<br/>";


//declare 

function onTick()
{
    echo  "Tick<br/>";
}

register_tick_function('onTick');

declare(ticks=3); // not mostly used in php 

$i = 0;
$length = 10;
while ($i < $length) {
    echo $i++ . '<br/>';
}

declare(ticks=0); //it will stop from this line

function sum1(int $x, int $y)
{
    $z = $x + $y;
    return $z;
}

echo sum1(7, 8) . "<br/>"; // here the strick mode wil give an error if we put "8" (String) instead of 8 (int), because it only takes datatype what really given , it don't typecast 


//goto 
//it also not mostly used in php. because it makes hardto read and maintain the code
//it helps jump the specific labeled section within your code 
$num = 0;

start:
$num++;

while ($num < 10) {
    echo "$num<br/>";
    goto start;
}
