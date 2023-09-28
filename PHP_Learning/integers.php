<?php
//integers
echo PHP_INT_MAX.'<br/>';
echo PHP_INT_MIN.'<br/>';
echo PHP_INT_SIZE.'<br/>';

$x=PHP_INT_MAX;
echo var_dump($x).'<br/>';

$y=PHP_INT_MAX+1;
echo var_dump($y).'<br/>';

//type casting
$z=(int)true;
echo $z.'<br/>';

$a=(int)'4.5';
echo $a.'<br/>';

$b=(int)"2raj";
echo $b.'<br/>';

$num=2_000_000_000;
echo $num.'<br/>';

echo is_int($num).'<br/>';

$num1=null;
echo $num1.'<br/>';

echo var_dump(is_int($num1));
?>
