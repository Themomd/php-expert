<?php
//$Daysofweek = 5;
$Daysofweek = date("l");
//echo "Today is " . date("l " . "Y/m/d") . "<br>";
echo $Daysofweek . "<br>";
switch ($Daysofweek){
    case "Saturday":
        echo "شنبه" . "<br>";
        break;
    case "Sunday": 
        echo "یکشنبه" . "<br>";
        break;
    case "Monday": 
        echo "دوشنبه" . "<br>";
        break;
    case "Tuseday":
        echo "سه شنبه" . "<br>";
        break;
    case "Wendesday":
        echo "چهارشنبه <br>";
        break;
    case "Thursday":
        echo "پنجشنبه <br>";
        break;
    case "Friday":
        echo "جمعه <br>";
        break; 
default:
        echo "null!";
}