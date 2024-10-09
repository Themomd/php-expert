<?php

function sum(int $num = null, int $num1 = null) :int {
    return $num + $num1;
}

echo sum(10,20);
echo "<hr>";

// this function has no name so you can't call it by name but you can assign it to a variable

$sum = function(int $num = null, int $num1 = null) :int {
    return $num + $num1;
};

echo $sum(10,20);
echo "<hr>";

// the benefit of this anonymous function is that you can assign it to numerous variables

$sum1 = function(int $num = null, int $num1 = null) :int {
    return $num + $num1;
};

echo $sum1(123,20);
echo "<hr>";

// call back function

function name($string = null) {
    // return strtoupper($string);
    // return strtolower($striong);
    $results = array(
        'upper' => strtoupper($string),
        'lower' => strtolower($string),
    );
    return $results;
}
print_r(name("eRfun"));
echo "<hr>";
$name = name("erfun");

// when you want to call a array() by echo 
echo $name['upper'];
echo "<br>";
echo $name['lower'];
echo "<hr>";

// calling back an anonymous function

function string(string $string = null, $callback = null){
    
    $results = array(
        'upper' => strtoupper($string),
        'lower' => strtolower($string),
    );
    if(is_callable($callback)){
        call_user_func($callback,$results);
    }else{
        echo "it's not callable"; 
    }
}

string("erfan",function($name){
    print_r($name);
    echo "<hr>";
    echo $name['upper']; 
    echo "<br>";
    echo $name['lower'];
});

