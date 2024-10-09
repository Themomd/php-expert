<?php
$num = 100;
/* if($num == 100){
    $msg = "$num is equal to 100";
}else{
    $msg = "$num is not equal to 100";
}
echo $msg; */

// ternary operators
//$variable = (condition) #if? #else: #echo;

$msg = ($num == 100) ? "$num is equal to 100" : "$num is not equal to 100";
echo $msg;