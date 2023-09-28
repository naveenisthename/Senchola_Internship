<?php

//Strings

$firstname='Leo';
$lastname=" $firstname '/Rolex' "; //can able to use variable and single quote etc 
//$lastname=" ${firstname} '/Rolex' "; this also work
//$lastname=" {$firstname} '/Rolex' "; this also work

echo $lastname.'<br/>';
echo $firstname.' '.$lastname.'<br/>';
echo $firstname[2].'<br/>';
echo $firstname[-2].'<br/>';//from the backside

echo var_dump($firstname).'<br/>';
$firstname[5]="z";
echo var_dump($firstname).'<br/>';

/*Heredoc 
 - enclosed with double quotes(if don't put "" , still works)
 - can have variables
 - here ESSAY is an identifier (it can be any names)
 - can able to use HTML 

 USECASE :  
     - when we have multiline strings with an complex expressions
     - no need for use concatinations,quotes 
     - very readble  
   
*/

$l=8;
$m=9;

$essay=<<<ESSAY
    All is well
Line1 $l
Line2 $m
Line3  '  "
<div>
<p>"Hello"</p>
<p>"Hi"</p>
</div>
ESSAY;

echo var_dump(nl2br($essay)).'<br/>'; // here All is well had before some space , in console it may be looks not there , but it also calculated   
 
echo nl2br($essay).'<br/>'; //nl2br is for breaks the new lines

/*Nowdoc 
 - enclosed with single quotes
 - can't have variables
 - here 'TEXT' is an identifier 
 - can able to use HTML
    
 USECASE :
     - when we have multiline strings with an complex expressions
     - no need for use concatinations,quotes 
     - very readble   
 */

$text =<<<'TEXT'
   All is well
Line1 $l
Line2 $m
Line3 "  ; '
<div>
<p>"Hello"</p>
<p>"Hi"</p>
</div>
TEXT;

echo var_dump(nl2br($text)).'<br/>'; //here All is well had before some space , in console it may be looks not there , but it also calculated   
 
echo nl2br($text).'<br/>';
?>