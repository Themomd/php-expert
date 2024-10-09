<?php

namespace myFirstNamespace;

// __LINE__
echo "line number: ".__line__."<br>";

// __FILE__
echo "file path is: ".__FILE__."<br>";

// __DIR__
echo "file directory is: ".__dir__."<br>";

// this one have to be defined in a block of a function
// __FUNCTION__

function test(){
    echo "active function in this file is:".' '.__FUNCTION__."<br>";
}
echo test();

echo "<hr>";

// __CLASS__

class myClass{
    public function testClassName(){
        return __CLASS__;
    }
}

$myclass = new myClass();
echo $myclass -> testClassName()."<br>";

// __METHOD__
class myClass1{
    public function testClassMethod(){
        return __METHOD__;
    }
}

$myclass1 = new myClass1();
echo $myclass1 -> testClassMethod()."<br>";

// __NAMESPACE__
class myClass2{
    public function testClassNamespace(){
        return __NAMESPACE__;
    }
}

$myclass2 = new myClass2();
echo $myclass2 -> testClassNamespace()."<br>";