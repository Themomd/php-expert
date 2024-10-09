<?php
if(isset($_REQUEST["send"])){
    if($_SERVER["REQUEST_METHOD"] == "POST"){ // if anyone tries to change the method to GET, this code will not allow it!
if(!empty($_REQUEST["firstName"]) and !empty($_REQUEST["age"])){
   
    echo "Welcome: " . $_REQUEST["firstName"] . "<br>";
    echo "You are: " . $_REQUEST["age"] . "years old.";

}else{
    echo "فیلد های مورد نظر را تکمیل نمایید" . "<br>";
}
    }else{
        echo "شیطونی نکن با این دلم.";
    }
}

?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
    content="ie=edge">
    <title>REQUEST method</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <label for="">نام
        <input type="text" name= "firstName" placeholder="نام شما...">
        </label>
        <label for="">سن شما
        <input type="text" name= "age" placeholder="سن شما...">
        </label>
        <input type="submit" name="send" value="ارسال">
        
    </form>
</body>
</html>