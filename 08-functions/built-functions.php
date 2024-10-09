<?php

function printMsg(){
    return "Hello world!";
}
echo printMsg();
echo "<hr>";

function doLogin($userEmail){
    return "You are logged in and your email is: $userEmail";
}
echo doLogin("the_momd@proton.me");

echo "<hr>";

function doLoginTest($userEmail,$password){
    return "You are logged in and your email is: $userEmail, and your password is: $password";
}
echo doLoginTest("the_momd@proton.me","123");

echo "<hr>";

function doLoginSample($userEmail,$password=null){
    return "You are logged in and your email is: $userEmail, and your password is: $password";
}
echo doLoginSample("the_momd@proton.me");

echo "<hr>";
function sum($x=10 , $y=11){
    return $x + $y;
}
#any arguman you give to the function will be overwrite on the default ones:
echo sum(20,40);

echo "<hr>";
function sumAll(){
    $args = func_get_args();
    return array_sum($args);
}
//var_dump(sumAll(1,2,5,15));
echo sumAll(1,2,5,15);

//those dots... does the func_get_args() job
echo "<hr>";
function sumAll2(...$args){
    return array_sum($args);
}
echo sumAll2(1,5,44,33);