<?php
//Loops

#while

$num = 0;
while ($num <= 10) {
    echo $num++;
    echo '<br/>';
}

while ($num <= 10) :
    echo $num++;
    echo '<br/>';
endwhile;

$i = 0;

while (true) {
    if ($i > 15) {
        break;
    }
    echo $i++ . ",";
}
echo '<br/>';

//do-while

$j = 0;

do {
    echo $j++ . ",";
} while ($j < 5);
echo '<br/>';

//for

for ($i = 0; $i < 10; $i = $i + 2) {
    echo $i . ",";
}
echo '<br/>';

for ($i = 0; $i < 10; $i = $i + 2) :
    echo $i . ",";
endfor;
echo '<br/>';

for ($i = 0; $i < 5; print $i . ",", $i++) {
    echo $i;
}
echo '<br/>';

$text = "Hello world";
for ($i = 0; $i < strlen($text); $i++) {
    echo $text[$i] . '<br/>';
}
echo '<br/>';

$letters = ["a", "b", "c", "d", "e"];

for ($i = 0; $i < count($letters); $i++) {
    echo $letters[$i] . '<br/>';
}
echo '<br/>';

$letters = ["a", "b", "c", "d", "e"];

//here the count funtion was not used in condition statement ,because it will have use based on the looping count , it will be make an performance issue , if it was big , so , it's good to be used in before condition statement 

for ($i = 0, $length = count($letters); $i < $length; $i++) {
    echo $letters[$i] . '<br/>';
}
echo '<br/>';

//forEach

//if we use it in not an array ,not an object it will give an error

$progrmminglanguages = ["PHP", "Java", " Python"];

foreach ($progrmminglanguages as $language) {
    echo $language . '<br/>';
}

foreach ($progrmminglanguages as $language) :
    echo $language . '<br/>';
endforeach;

//here if we use & , then only it assign a value by ref , that means if we modify it using by reference then only out of loop it will be the same modify value , if we don't use & or modify without the reference only by value , the modify value only modified within the loop not out of the loop
foreach ($progrmminglanguages as $key => &$language) {
    $language = "Go";
    echo $key . ":" . $language . '<br/>';
}

print_r($progrmminglanguages); //here the original array was changed because of modify by the reference using &

echo $language; //this $language only gave an last index value of an array.sp don't use this out of loop 
echo '<br/>';
$language = "PHP";
print_r($progrmminglanguages);
echo '<br/>'; //now because we assign it to PHP , it will also changed in the $programminglanguages array

$user = [
    "name" => "Naveen",
    "age" => 18,
    "haveDegree" => true,
    "address" => [22, "Gandhi street", "MGR Nagar"]
];

//using json_encode()(this funtion will do array to sting conversion) to get an multidimensional array values
foreach ($user as $key => $value) {
    echo $key . ":" . json_encode($value) . '<br/>';
}
