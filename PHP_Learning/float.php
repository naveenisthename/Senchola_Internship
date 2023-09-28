<?php
//float

$num=133_345.59878;
echo $num.'<br/>';

$num1=13.5e4;
echo $num1.'<br/>';

echo PHP_FLOAT_MAX.'<br/>';
echo PHP_FLOAT_MIN.'<br/>';

echo (PHP_FLOAT_MAX*2).'<br/>';//it will give INF , that's mean infinity , if floats are out of bounds
echo var_dump(PHP_FLOAT_MAX*2).'<br/>';
echo var_dump(is_infinite(PHP_FLOAT_MAX*2)).'<br/>';
echo var_dump(is_nan(PHP_FLOAT_MAX*2)).'<br/>'; //NAN means "Not An Number"
echo floor($num).'<br/>';
echo ceil($num).'<br/>';

//typecasting
$weight=22;
echo var_dump ((float)$weight).'<br/>';

$abc="abavsg";
echo var_dump ((float)$abc).'<br/>';

$letters="12.4abc";
echo var_dump ((float)$weight).'<br/>';

$a=0.23;
$b=1-0.77;

if($a==$b) {
    echo "YES";
}else {
    echo "NO";
}

//never compare floats like this, it will give false 
?>