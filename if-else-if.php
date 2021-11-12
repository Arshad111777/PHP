 <?php
// If Else If Statement 

$per = 80;

if ($per >= 80 && $per <= 100) {
    # code...
    echo "You Are In Merit";
} elseif ($per >= 60 && $per <= 79) {
    # code...
    echo "You Are Ist Division";
} elseif ($per >= 45 && $per <= 59) {
    # code...
    echo "You Are IIst Division";
} elseif ($per >= 33 && $per <= 44) {
    # code...
    echo "You Are IIIst Division";
} elseif ($per < 33 ) {
    # code...
    echo "You Are Fail";
}else{
    echo "Please Enter The Valid Percentage.";
}









?>