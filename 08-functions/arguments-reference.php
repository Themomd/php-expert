<?php
// Arguments by value
function test($num = null){
    return $num *= $num;
}
echo $num = 5;
echo "<br>";
echo test($num);
echo "<br>";
echo $num;

echo "<hr>";

// Arguments by reference
function test1(&$num = null){
    return $num *= $num;
}
echo $num = 5;
echo "<br>";
echo test1($num);
echo "<br>";
echo $num;

echo "<hr>";

// variables scope
// sample 1
function test2(){
    $Msg = "Hello world";
    return $Msg;
}
echo test2();
// echo $Msg; You can't print a variable that is defind in the function block!
echo "<hr>";

//sample2
// variables shoud be defind in the functions block!
/* $Msg2 = "Hello world";
function test3(){
    return $Msg2;
}
echo test2();
echo $Msg2; */

echo "<hr>";

//sample3
// if you use global key for a variable, then you can call it outside the function:
$Msg2 = "Hello world";
function test3(){
    global $Msg2;
    return $Msg2;
    
}
echo test2();
echo "<br>";
echo $Msg2;
echo "<br>";
$Msg2 = "Bye!!!";
echo test3();

echo "<hr>";
// dynamic functions
function hello($name = null){
    return "hello $name <br>";
}
echo hello();
$hello = "hello";
echo "<br>";
echo $hello("Mohamad!");

