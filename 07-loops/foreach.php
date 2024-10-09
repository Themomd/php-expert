<?php
$array = array(1,2,3,4,5,6);
foreach($array as $value){
    echo $value . "<br>";
}
echo "<hr>";
$array = array(1,2,3,4,5,6);
foreach($array as $value){
    if ($value == 5)continue;
    echo $value . "<br>";
}
echo "<hr>";
$users = array(
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
foreach($users as $key => $valeu){
    echo "name: $key :role: ({$valeu["role"]}) age: ({$valeu["age"]}) <br>";
}
foreach($users as $user){
    echo "Your role is: {$user["role"]}<br>";
}