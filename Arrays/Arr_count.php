<?php 
$food = [
// "Fruits"=>["Orange",
// "Mango",
// "Papaya",
// "Grapes"],

// "Veggie"=>[
//     "Lemon",
//     "Tomato",
//     "Carrot",
//     "Pea"
// ],

"Orange",
"Mango",
"Papaya",
"Pineapple"


];

$len =  count($food); 

for($i = 0; $i<$len; $i++){
echo $food[$i] . "<br/>";
}




// echo count($food,1);

// echo "<br/>";

// echo sizeof($food["Fruits"]);



?>