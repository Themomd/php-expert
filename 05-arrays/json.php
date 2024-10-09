<?php
    $users = array(
        "1" => [
            "name" => [ "firstName" => "Ali",
                        "lastName" => "Abadi",
        ],
            "email" => "Ali@gmail.com",
            "username" => "Ali110",
        ],
        "2" => [
            "name" => "Erfan",
            "Email" => "Erfan@yahoo.com",
            "username" => "Erfan210",
        ],
        "3" => [
            "name" => "Maryam",
            "Email" => "Maryam@yahoo.com",
            "username" => "Maryam220",
        ],
    );
    
    print_r($users);
    echo '<br>';
    echo '<br>';
    
    // array to json 
    $jsonStr = json_encode($users);
    echo $jsonStr;

    // json to array assoc
    echo '<br>';
    echo '<br>';
    $jsonArr = json_decode($jsonStr,1);
    print_r($jsonArr);
    echo '<br>';
    echo '<br>';
    echo ($jsonArr[1]["name"]["firstName"]);

    // json to stdclass object
    echo '<br>';
    echo '<br>';
    $userObjects = json_decode($jsonStr);
    print_r($userObjects);
    echo '<br>';
    echo '<br>';
    echo ($userObjects->{1}->name->firstName);

    echo "<hr>";

    // direct change array to objects
    $usersToObjects = (object) $users;
    print_r($usersToObjects);
