<?php
if(isset($_POST["send"])){
if(!empty($_POST["firstName"]) and !empty($_POST["age"])){
   
    echo "Welcome: " . $_POST["firstName"] . "<br>";
    echo "You are: " . $_POST["age"] . "years old.";

}else{
    echo "فیلد های مورد نظر را تکمیل نمایید" . "<br>";
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
    <title>POST method</title>
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