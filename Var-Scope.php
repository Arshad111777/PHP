<?php 
$x = 10;

function test(){
    global $x;

   echo "Variable  $x  Inside Function <br/>"; 
}

test();

echo "Variable  $x  Outside Function";


?>