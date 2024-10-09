<?php
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
$users = json_decode(json_encode($user));
if($users -> Erfan -> role == "editor" and $users -> Erfan -> age == 18){
    echo "You are eligible";
}else if($users -> Ali -> age >= 17){
    echo "You are eligible";
}else if($users -> sara -> email == "sara@gmail.com"){
    echo "welcome sara!";
}
else{
    echo "You are not eligible";
}