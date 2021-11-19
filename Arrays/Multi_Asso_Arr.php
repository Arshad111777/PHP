<?php 
$marks = [

    "Krishna"=>[
     "physics"=>85,
     "math"=>70,
     "chemistry"=>60,
    ],

    "Salman"=>[
        "physics"=>75,
        "math"=>77,
        "chemistry"=>65,
       ],

       "Sam"=>[
        "physics"=>58,
        "math"=>50,
        "chemistry"=>40,
       ]

       

];

echo "<table border='2px'>
<tr>
<th>Student Name</th>
<th>Physics</th>
<th>Maths</th>
<th>Chemistry</th>



</tr>";



foreach ($marks as $key => $val1) {
    # code...
    echo "
    <tr>
    <td>$key</td>   
      ";
    foreach($val1 as $val2){
     echo "
     <td>$val2  </td>";
    }
    echo "</tr>";
}

echo "</table>";

?>