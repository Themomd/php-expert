<?php

// every variable that you define in your project will be a member of Globals variable!
/* $num = 123;
$num = ["erfan","ali"];

 echo "<code>";
var_dump($GLOBALS);
echo "</code>";
echo "<hr>";

//$GLOBALS is an array()

$x = 1;
$y = 2;

echo "<code>";
var_dump($GLOBALS);
echo "</code>";
echo "<hr>";

function sum(){
    // in this case, using GLOBALS allows us to use $x and $y even they are outside of the function scope
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

// if you want to call $z and do the sum, you have to call the function first
sum();
echo $z;
echo "<hr>"; */

echo "<pre>";
var_dump($_SERVER);
echo "<pre>";
echo "<hr>";
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME'];