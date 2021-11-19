<?php 
/*
$students = [
    [1,"Arshad Ali","Computer Operator",20000],
    [2,"Owaish Qadri","Computer Operator",20000],
    [3,"Salman Khan","Computer Operator",20000],
    [4,"Sam Peter","Computer Operator",20000],
];


$students[0][1] = "Sam Khan";
$students[1][2] = "CEO";
$students[3][2] = "HR";

echo "<table border='2px'>";

echo "<tr>";
echo "<th>Emp Id </th>";
echo "<th>Emp Name </th>";
echo "<th>Emp Role </th>";
echo "<th>Emp Salary </th>";
echo "</tr>";


echo "<tr>";
foreach ($students as  $v1) {
    # code...
   foreach($v1 as $v2){
 
    echo "<td>$v2</td>";

   }

echo "</tr>";
   
}

echo "</table>";

*/

$emp = [
"bill"=>20,
"Peter"=>10,
"Salman"=>15
];
echo "<ol>";
foreach ($emp as $key => $v1) {
    # code...
echo "<li>$key  $v1</li>";
}

echo "</ol>";

?>