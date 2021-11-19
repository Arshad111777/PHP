<?php 
/*
$emp = [

[1,"Sam","Manager",20000],
[2,"Peter","Salesman",40000],
 [3,"Lara","C/O",30000],
[4,"James","Driver",10000],


];

echo "<table border='2px'>
<tr>
<th>Emp Id</th>
<th>Emp Name</th>
<th>Emp Designation</th>
<th>Emp Salary</th>


</tr>
";

foreach($emp as list($id,$name,$designation,$salary)){
echo "<tr>
<td>$id</td>
<td>$name</td>
<td>$designation</td>
<td>$salary</td>


</tr>";


}

*/


$emp = [

    [
   "id"=>1,
   "name"=>"Krishna",
   "designation"=>"Manager",
   "salary"=>20000
    ],

    
    [
        "id"=>2,
        "name"=>"Salman",
        "designation"=>"HR",
        "salary"=>30000
         ],



         
    [
        "id"=>3,
        "name"=>"Edwards",
        "designation"=>"CEO",
        "salary"=>40000
         ],


];
echo "<table border='2px'>
<tr>
<th>Emp Id</th>
<th>Emp Name</th>
<th>Emp Designation</th>
<th>Emp Salary</th>
</tr>
";


foreach($emp as list("id"=>$id,"name"=>$name,"designation"=>$designation,"salary"=>$salary)){
echo "<tr>
<td>$id</td>
<td>$name</td>
<td>$designation</td>
<td>$salary</td>


</tr>";

}





?>