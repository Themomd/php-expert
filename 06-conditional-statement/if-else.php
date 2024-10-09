<?php
/* $num = 32;
 if($num < 100){
    #code to be executed.
    echo "num is lower than 100!";
}
echo "<hr>";
$num = 101;
if($num < 100){
    #code to be executed.
    echo "num is lower than 100!";
}else{
    echo "num is not lower than 100";
} */
/* $num = 32;
$num1 = 23;
if($num == 32){
    echo "true";
    if($num1 == 23){
        echo "<br>";
        echo "the other condition is also true";
    }else{
        echo "the other condition is not true";
    }

}else{
    echo "false";
} */

$user = array(
    "Ali" =>
    [
        "role" => "author",
        "age" => 17,
        "email" => "Ali@gmail.com"
    ],
    "Erfan" => [
        "role" => "admin",
        "age" => 20,
        "email" => "Erfan@gmail.com"

    ],
    "Sara" => [
        "role" => "editor",
        "age" => 22,
        "email" => "Sara@gmail.com"
    ],
);
echo "<hr>";

//$users = (object) $user;
/* var_dump($user);
echo "<hr>";
$arrtoJson = json_encode($user);
var_dump($arrtoJson);
echo "<hr>";
$Jsontoarr = json_decode(json_decode($arrtoJson));
var_dump($Jsontoarr); */

$users = json_decode(json_encode($user));
if($users -> Ali -> role == "admin" || $users -> Ali -> email == "Ali@gmail.com"){
    if($users -> Ali -> age >= 17){
        echo "You are eligible"."<br>";
    }
    echo "welcome to the control panel";
}else{
    echo "You can't login";
}
