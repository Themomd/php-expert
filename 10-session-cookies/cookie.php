<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>

<?php

// echo time();

// setcookie(name,value,path,domain,secure,httponly);
$cookieName = "user";
$cookieValeu = "Mohammad";

// if you want to cookie be disable, you simply write: time() - 3600!
setcookie($cookieName, $cookieValeu, time()+86400, "/");

if(!isset($_COOKIE[$cookieName])){
    echo "cookie name':"  . $cookieName ."'  is not set'";
    
}else{
    echo "cookie'".$cookieName."'is set<br>";
    echo "cookie name: " . $cookieName . " is set";
}
echo "<hr>";

//if you wanna know is there any cookie on this domain:
if(count($_COOKIE) > 0){
    echo "cookies already exists";
}else{
    echo "there is no cookie!!!";
}
?>
</body>
</html>