<?php
// Switch Case 

/*
$day = 1;

switch($day){
    case '1':
        # code...
        echo "Today Is Monday";
        break;

        case '2':
            # code...
            echo "Today Is Tuesday";
            break;
            case '3':
                # code...
                echo "Today Is Wednesday";
                break;
                case '4':
                    # code...
                    echo "Today Is Thursday";
                    break;
                    case '5':
                        # code...
                        echo "Today Is Friday";
                        break;
                       
                        case '6':
                            # code...
                            echo "Today Is Saturday";
                            break;

                            case '7':
                                # code...
                                echo "Today Is Sunday";
                                break;
                                
                                default :
                                echo "Please Enter The Valid Week Day.";
                    
}

*/


$age = 30;

switch (true) {
    case ($age >= 18 && $age <= 30):
        # code...
        echo "You Are Young";
        break;

        case ($age >= 31 && $age <= 50):
    echo "You Are Older";
    break;
    case ($age >= 52 && $age <= 100) :
        echo "You Are Too Older";
    default:
        # code...
        break;
}





?>