<?php
/*
boolean:
 - integers 0 - 0 = false
 - floats 0.0 - 0.0 = false
 - '' = false
 - '0' = false
 - [] = false
 - null = false
*/

$complete=true;
// true will give 1 , false will give nothing 

echo $complete.'<br/>';

var_dump(is_bool($complete));
//is_bool() will return true if it was boolean or false 
echo '<br/>';

if($complete) {
    echo "success";
}else {
    echo "fail";
}

?>