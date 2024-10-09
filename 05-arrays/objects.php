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
);
 // direct change array to objects
 $usersToObjects = (object) $users;
 print_r($usersToObjects);
 echo "<hr>";

 // direct change object to array
 $userToArray = (array) $usersToObjects;
 print_r($userToArray);
 echo "<hr>";

 $car = new stdclass;
 $car -> name = "Audi";
 $car -> model = 1984;
 $car -> gearbox = "manual";
 print_r($car);
 echo "<br><br>";
 echo $car -> model;
 echo "<br>";
 /* in this case, objects will be called by reference!
every change in assigned object will be overwrite in first object.*/
 $car2 = $car;
 // with clone you can stop call by reference in objects//
 $car3 = clone $car;
 $car2 -> name = "benz";
 $car3 -> name = "bmw";
echo $car -> name."<br>";
echo $car2 -> name."<br>";
echo $car3 -> name."<br>";



