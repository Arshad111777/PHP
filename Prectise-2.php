<?php 
$emp = [

    [
        "id"=>1,
        "name"=>"Arshad Ali",
        "designation"=>"Manager",
        "salary"=>10000,
    ],

    [
        "id"=>2,
        "name"=>"Anwer Ali",
        "designation"=>"HR",
        "salary"=>20000,
    ],


    [
        "id"=>3,
        "name"=>"Suyash Kumar",
        "designation"=>"CEO",
        "salary"=>100000,
    ],


    [
        "id"=>4,
        "name"=>"Nishad Shah",
        "designation"=>"Driver",
        "salary"=>20000,
    ],


    [
        "id"=>5,
        "name"=>"Arshad Qadri",
        "designation"=>"C/o",
        "salary"=>50000,
    ],





];
echo "<table border='2px'>";
foreach($emp as list("id"=>$id,"name"=>$name,"designation"=>$designation,"salary"=>$salary)){
echo "<tr>
<td>$id</td>
<td>$name</td>
<td>$designation</td>
<td>$salary</td>

</tr>";


}



?>