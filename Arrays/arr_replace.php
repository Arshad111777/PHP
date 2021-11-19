<?php 
//replace 1 & 2 Array Value
// $a = ["Sanjay","Aman","Rehman","Karan"];
// $b = ["Sam","Peter"];
// $c = ["red","green","blue"];

// $fruits = ["Orange","Mango",'a'=>"Apple","Banana"];

// $veggie = [
//     'a'=>'carrot',
//     1=>'pea'
// ];


$arr1 = [
    "a"=>["red"],
    "b"=>["green","pink"],
    
];


$arr2 = [
    "a"=>["Yellow"],
    "b"=>["Black"],
    
];



$newArr = array_replace_recursive($arr1,$arr2);

echo "<pre>";
print_r($newArr);
echo "</pre>";

?>