<?php
// loops
$i = 0;
/* echo $i . "<br>";
while ($i++ < 10){
    echo $i . "<br>";
}
echo "<hr>";
$a = 0;
while ($a <= 10){
    echo $a . "<br>";
    $a++;
} */
while(true){
    echo "<span style = 'color:#fff; background-color:red; padding:2px;'>$i<span><br>";
    if($i == 10){
        break;
    }
    $i++;
}