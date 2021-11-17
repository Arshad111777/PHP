<?php 
$emp = [
[1,"Sam","Manager",20000],
[2,"Peter","Salesman",40000],
[3,"Lara","C/O",30000],
[4,"James","Driver",10000],

];

echo "<table border='2px'>";
echo "<tr>";
echo "<th>Emp Id</th>";
echo "<th>Emp Name</th>";
echo "<th>Emp Work</th>";
echo "<th>Emp Salary</th>";


echo "</tr>";

foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
       echo "<td>$v2</td>" ; 
    }
    echo "</tr>";

}
echo "</table>";


?>