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
"Pineapple",
"Mango"


];

// $len =  count($food); 

// for($i = 0; $i<$len; $i++){
// echo $food[$i] . "<br/>";
// }




// echo count($food,1);

// echo "<br/>";

// echo sizeof($food["Fruits"]);


echo "<pre>";
print_r(array_count_values($food));
echo "</pre>";



?>