<?php

// declare keyword says that the types of argumans should be the same as we declared

declare(strict_types=1); // =1 means true!

function sum(int $a = null, int $b = null){
    return $a + $b;
}

//it will not work with a string argumans because we declared that the argumans should be int
// echo sum(10,20);

echo sum(10,20);
echo "<hr>";

function sum1(int $a = null, int $b = null) :int {
    return $a + $b;
}

echo sum1(10,20);

// it can't be float
// echo sum1(10.2,20);

function doLogin(string $username = null, string $password = null) :string {
    return $username . $password;
}

echo "<hr>";
echo doLogin("Yuor username is: the_momd<br>","Your password is: 1234sdf");

// if you don't use declare() function and the user types his pass in int, then the compiler will run it as a string.
// echo doLogin("Yuor username is: the_momd<br>","Your password is:", 123);
