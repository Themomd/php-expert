<?php

if(!empty($_GET["firstName"]) or !empty($_GET["age"])){
   
    echo "Welcome: " . $_GET["firstName"] . "<br>";
    echo "You are: " . $_GET["age"] . "years old.";

}else{
    echo "فیلد های مورد نظر را تکمیل نمایید";
}

?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
    content="ie=edge">
    <title>Get method</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
        <label for="">نام
        <input type="text" name= "firstName" placeholder="نام شما...">
        </label>
        <label for="">سن شما
        <input type="text" name= "age" placeholder="سن شما...">
        </label>
        <input type="submit" value="ارسال">
        
    </form>
    <a href="/7learn.php/09-superglobal-variables/single.php?id=10&name=php">ادامه ی مطلب</a>
</body>
</html>