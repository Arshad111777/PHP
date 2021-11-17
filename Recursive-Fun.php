<?php 

function data($n){
    if ($n <= 5) {
        # code...
        echo "Hello World <br/>";
        data($n + 1);
    }

}

data(1)



?>