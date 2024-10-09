<?php
$i = 0;
while ($i <= 10){
    //echo $i . "<br>";
$i++;    
}
echo "<hr> For loops";

//for(init;condition;incr and decr){#code}

for($j = 0;$j <= 10;$j++){
    //echo "<br>" . $j;
}
echo "<hr>";
for($s = 10;$s >= 0;$s--){
    //echo "<br>" . $s;
}
echo "<hr>";

$users = array(["Erfan",20],["Ali",22],["Sara",25],["Maryam",29]);
//print_r($users);

for($k = 0; $k <= 3; $k++){
    echo "name: {$users[$k][0]} age: {$users[$k][1]}<br>";
}
echo "<hr>";
$k = 0;
while ($k <= 3){
        echo "name: {$users[$k][0]} age: {$users[$k][1]}<br>";
        $k++; 
}
echo "<hr>";

#using this can help you find out about the length of the array
//echo $arrSize = sizeof($users);
for($k = 0; $k < sizeof($users); $k++){
    echo "name: {$users[$k][0]} age: {$users[$k][1]}<br>";
}
