<?php

echo "Hello", " " ,"World"; //concatinate by single words
print 'Hello World';
print("Hello World"); //not concatinate by single words
echo print("Hello");
echo 'Joe\'s world';
echo "Joe's world'";

$name="Naveen";
/*
 -Variable must be starts with letters{UPPER or lower} or underscores
 -can't started with numbers or any special charaters
 -can't started with reserved key words
 -it is case sensitve
 -spaces, hyphens and punchuation symbols are not allowed
*/
echo $name;

$num1=5;
$num2=$num1;
//variables are assigned by values 
$num1=8;

echo $num2;

//If variables needs to assign by reference, then it needs to assign by "&" 
$num3=11;
$num4=&$num3;  //assigned by "&"
//variables are assigned by values 
$num3=13;

echo $num4;

$firstName="Raja";
echo 'hello $firstName'; // will not print the variable's value
echo "hello {$firstName}"; // or echo "hello $firstName";
echo 'hello '.$firstName;

//Variable Variables

$foo='bar';
$$foo='baz';  //$bar='baz'; $$foo='baz' here $foo was replaced by it's value bar;

echo $foo,$$foo;
echo $foo,$bar;
echo "$foo,${$foo}"; 
echo "$foo,{$$foo}";
?> 
still print this line

<!DOCTYPE html>
<html>
    <body>
        <h1>
            <?= "PHP" ?>
        </h1>
        <p>"My first paragraph"</p>
        <?php 
        $a=1;
        $b=2;
        echo '<p>'.$a.','.$b.'</p>';
        ?>
    </body>
</html>